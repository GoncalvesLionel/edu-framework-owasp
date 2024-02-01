import os
from cryptography.fernet import Fernet

# let's find some files to encrypt and added them to a list
files = []

for file in os.listdir():
    if file == 'cryptor.py' or file == 'key.key' or file== 'decryptor.py' or file == 'README.md':
        continue
    if os.path.isfile(file):
        files.append(file)

print(files)

with(open('key.key', 'rb')) as key:
    secretkey = key.read()

for file in files:
    with open(file, 'rb') as f:
        data = f.read()

    decrypted = Fernet(secretkey).decrypt(data)

    with open(file, 'wb') as f:
        f.write(decrypted)
