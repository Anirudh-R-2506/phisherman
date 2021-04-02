#!/Library/Frameworks/Python.framework/Versions/3.8/bin/python3
import os

for a,b,c in os.walk(os.getcwd()):
    for d in c:
        if ".DS" in d:
            os.system('git rm "'+a+'/'+d+'"')