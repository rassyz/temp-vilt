VILT STACK (VUE JS, INERTIA JS, LARAVEL 13, TAILWIND CSS)

OPEN POWERSHELL RUN ADMINISTRATOR

```

Set-ExecutionPolicy Bypass -Scope Process -Force; [System.Net.ServicePointManager]::SecurityProtocol = [System.Net.ServicePointManager]::SecurityProtocol -bor 3072; iex ((New-Object System.Net.WebClient).DownloadString('https://community.chocolatey.org/install.ps1'))

```

INSTALL CHOCO

```

choco install mkcert

```

```

cd C:\Users\acer\Documents\>
mkdir ssl
cd ssl
mkcert -install
mkcert vilt.test

```

ADD HOSTS IN WINDOWS

```

PS C:\Users\acer\Documents\ssl> Add-Content -Path "C:\Windows\System32\drivers\etc\hosts" -Value "`n127.0.0.1 vilt.test"

```

```

Add-Content -Path "C:\Windows\System32\drivers\etc\hosts" -Value "`n127.0.0.1 vilt.test"

```

TO REMOVE POINTING HOSTS WITH POWERSHELL (TIDAK DILAKUKAN)

```

(Get-Content "$env:windir\System32\drivers\etc\hosts") | Where-Object { $_ -notmatch 'vilt\.test' } | Set-Content -Force "$env:windir\System32\drivers\etc\hosts"

```

ADD HOST IN WSL

```

nano /etc/hosts

```

```

127.0.0.1 vilt.test

```

(UNTUK KELUAR DAN SIMPAN) CTRL + x Y enter

ADDED IN WSL

```

nano /root/.zshrc atau .bashrc

```

```

alias dcm='docker exec -it $(docker ps --format "{{.Image}} {{.Names}}" | grep "\_php:latest" | head -n 1 | awk "{print \$2}") art'

```

(UTK KELUAR DAN SIMPAN) CTRL + x Y enter

```

source /root/.zshrc

```

SETUP PROYEK

```

cp .env.example .env

# isi DB_PASSWORD di .env (satu nilai yang sama untuk MariaDB + Laravel)

# taruh sertifikat mkcert vilt.test di folder nginx/ssl/

docker compose up -d --build

```

```

```
