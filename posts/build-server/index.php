<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include('../../head.html');?>
        <title>Build your own home server</title>
    </head>
    <body>
    <article>
        <h1>Build your own home server</h1>
        <p>I had a fairly old laptop for a long time and no one cared about it. I was sorry that the `piece of iron` was idle. And I got a great idea that it would be cool to build my own server, and I will learn how to do it. So this article was born.</p>
        <p>I decided to use it as cloud drive and hosting for my website.</p>
        <div class="article-img">
            <img src="./laptop.jpg" alt="Laptop">
        </div>
        <p>And yeah, that's my laptop — ASUS Eee PC 1005PE, for '05 it was very powerful and mobile laptop, but now its a trash.</p>
        <h3>Operating System</h3>
        <p>It was decided to install <span class="remote link"><a href="https://ubuntu.com/download/server" target="blank_">Ubuntu Server 20.04.3 LTS</a></span> because it's very stable OS for servers. You can check full setup in this video:</p>
        <iframe width="100%" src="https://www.youtube.com/embed/lXcfKTNObOo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <p>If you prefer to use a wireless connection, then after OS installation you should install <code>NetworkManager</code>. In my case it's very easy:</p>
<pre>
λ sudo apt-get update -y                      # update repository
λ sudo apt-get upgrade -y                     # upgrade utilities
λ sudo apt-get install NetworkManager -y      # install NetworkManager
λ sudo systemctl start NetworkManager         # start service
λ sudo systemctl enable NetworkManager        # setup autostart
</pre>
        <p>If you want to connect public WiFi you should type this:</p>
<pre>
λ nmcli device wifi connect "connection_name"
</pre>
    <p>where <u>connection_name</u> is name of WiFi network.</p>
    <p>And if you want to connect private WiFi you should type this:</p>
<pre>
λ nmcli device wifi connect "connection_name" password "password"
</pre>
    <p>where <u>connection_name</u> is name of WiFi network and <u>password</u> is password for WiFi.</p>
    <p>And if we type <code>ip a</code> we will see IP address of our server. To test local connection you can type <code>ssh username@ip_address</code>, where <u>username</u> is your server's username and <u>ip_address</u> is server's ip address. After that, you can remotely control your server by connecting locally through the terminal.</p>
    <p>The last step is to setup UFW:</p>
<pre>
λ sudo systemctl start ufw      # start service
λ sudo systemctl enable ufw     # setup autostart
λ sudo systemctl status ufw     # check service status
</pre>
    <h3>Webdmin</h3>
    <p>Webmin is a convenient web interface for remote computer management.</p>
    <p>Installing Webdmin:</p>
<pre>
λ sudo apt update -y
λ sudo apt install software-properties-common apt-transport-https wget
λ wget -q http://www.webmin.com/jcameron-key.asc -O- | sudo apt-key add -
λ sudo add-apt-repository "deb [arch=amd64] http://download.webmin.com/download/repository sarge contrib"
λ sudo apt install webmin
λ sudo ufw allow 10000
</pre>
    <p>After that, it will be possible to control the server from any device in the local network by clicking on the link <code>http://server_ip_address:10000</code> in the browser.</p>
    <div class="article-img">
            <img src="./webdmin.png" alt="Webdmin">
    </div>
    <h3>DNS Records</h3>
    <p>It may so happen that your provider company didn't give you a public external IP address. If this happens, then you must ask him to be connected. I faced such a situation.</p>
    <p>Ok, after you got the external IP address you should go to the website where you bought the domain and make some records.</p>
<pre>
A   *      your_public_IP_address     # `A` DNS record for all others subdomains
A   @      your_public_IP_address     # `A` DNS record for `@`
A   www    your_public_IP_address     # `A` DNS record for `www`
</pre>
    <h3>Port Routing</h3>
    <p>It is worth noting that we have a public external IP that match to all local devices connected to our network. In order to link to our server, where Nginx will work for us, you need to register <i>Port Forwarding</i>.</p>
    <p>I have a <i>Netis WF2780</i> router. To configure it, I have to open in the browser router's IP address, for example: <code>http://192.168.1.1</code>. After thar I go to <code>`Advanced Settings`</code>. In order to give a permanent IP address to the server, I have to do the following steps: <code>`Network` > `LAN` > `DHCP Client List` > *select server* > `Operations` > `Reserve`</code>. Now, even if our server is disconnected for a long time, the router will remember its MAC address and we will not have to change the settings in the future.</p>
    <p>Let's move on to <i>Port Forwarding</i> by following these steps: <code>`Forwarding` > `Virtual Servers`</code> and you need to add 3 rows. As an example, let's take that the local IP address of our server is <code>192.168.1.8</code>.</p>
    <table class="article-table">
        <tr>
            <th>Description</th>
            <th>IP Address</th>
            <th>Protocol</th>
            <th>External Port</th>
        </tr>
        <tr>
            <td>ssh</td>
            <td>192.168.1.8</td>
            <td>TCP</td>
            <td>22</td>
        </tr>
        <tr>
            <td>website</td>
            <td>192.168.1.8</td>
            <td>TCP</td>
            <td>80</td>
        </tr>
        <tr>
            <td>website</td>
            <td>192.168.1.8</td>
            <td>TCP</td>
            <td>443</td>
        </tr>
    </table>
    <p>Now we can move on to the next stage.</p>
    <h3>Nginx</h3>
    <p>The next step is to host our website and for this I used Nginx. Soooo, let's go ahead to the setup.</p>
    <p>Installing Nginx</p>
<pre>
λ sudo apt update
λ sudo apt install nginx
</pre>
    <p>Adjusting the Firewall</p>
<pre>
λ sudo ufw allow "Nginx Full"
λ sudo ufw status               # check UFW status
</pre>
    <p>Checking Web Server</p>
<pre>
λ sudo systemctl status nginx   # check Nginx status
λ curl -4 icanhazip.com         # get your public IP address
</pre>
    <p>When you have your server's IP address, enter it into your browser's address bar: <code>http://your_server_ip</code> and you should receive the default Nginx landing page. If you are on this page, your server is running correctly and is ready to be managed.</p>
    <p>Setting Up Server Blocks. We load the sources of our website:</p>
<pre>
λ cd --
λ git clone https://github.com/endygamedev/endygamedev.github.io.git
</pre>
    <p>Create the directory for <code>ebronnikov.xyz</code> <small>(if you are creating your own website, you should replace `ebronnikov.xyz` with your domain name)</small> as follows, using the <code>-p</code> flag to create any necessary parent directories:</p>
<pre>
λ sudo mkdir -p /var/www/ebronnikov.xyz/html
</pre>
    <p>Next, assign ownership of the directory with the <code>$USER</code> environment variable:</p>
<pre>
λ sudo chown -R $USER:$USER /var/www/ebronnikov.xyz/html
</pre>
    <p>The permissions of your web roots should be correct if you haven’t modified your umask value, which sets default file permissions. To ensure that your permissions are correct and allow the owner to read, write, and execute the files while granting only read and execute permissions to groups and others, you can input the following command:</p>
<pre>
λ sudo chmod -R 755 /var/www/ebronnikov.xyz
</pre>
    <p>Next, copy all your website sources into <code>html</code> directory:</p>
<pre>
λ sudo cp -r ~/endygamedev.github.io/* /var/www/ebronnikov.xyz/html/
</pre>
    <p>To avoid a possible hash bucket memory problem that can arise from adding additional server names, it is necessary to adjust a single value in the /etc/nginx/nginx.conf file. Open the file:</p>
<pre>
λ sudo vim /etc/nginx/nginx.conf
</pre>
    <p>Find the <code>server_names_hash_bucket_size</code> directive and remove the <code>#</code> symbol to uncomment the line:</p>
<pre>
/* Filename: /etc/nginx/nginx.conf */

...
http {
    ...
    server_names_hash_bucket_size 64;
    ...
}
...
</pre>
    <p>Setup default configuration:</p>
<pre>
λ sudo vim /etc/nginx/sites-available/default
</pre>
    <p>And edit such row:</p>
<pre>
/* Filename: /etc/nginx/sites-available/default */

server {
    ...
    # listen 80 default_server;
    # listen [::]:80 default_server;
    listen 80;
    server_name ebronnikov.xyz www.ebronnikov.xyz;
    ...
    # root /var/www/html;
    root /var/www/ebronnikov.xyz/html;
    ...
}
</pre>
    <p>Restart Nginx service:</p>
<pre>
λ sudo service nginx restart
</pre>
    <p>After that you can type: <code>http://ebronnikov.xyz</code> into your browser's address bar and get your webpage. <u>BUT</u> we ended up with an uncertified website, so we need to move on to the certification stage.</p>
    <h3>Certification</h3>
    <p>We will use the utility <span class="link remote"><a href="https://github.com/certbot/certbot" target="blank_">Certbot</a></span>.</p>
    <p>Installing Certbot:</p>
<pre>
λ curl -o- https://raw.githubusercontent.com/vinyll/certbot-install/master/install.sh | bash
</pre>
<p>Setup certification:</p>
<pre>
λ sudo certbot --nginx -d ebronnikov.xyz -d www.ebronnikov.xyz
λ sudo certbot renew --dry-run      # Only valid for 90 days
</pre>
    <p>After that, you can go to the website <code>ebronnikov.xyz</code> and everything should work correctly.</p>
    <h3>Conclusion</h3>
    <p>As a result, we got a working server on which you can store some files and host various websites, you could still install a database, but this is another time.</p>
    <h3>References</h3>
    <ol class="article-ol">
        <li><span class="remote"><a href="https://youtu.be/lXcfKTNObOo">Turning an OLD PC/Laptop into a Media Server!</a></span></li>
        <li><span class="remote"><a href="https://youtu.be/1cKF_pJ8b_o">Learn how to setup a domain with Nginx in less than 4 minutes!</a></span></li>
        <li><span class="remote"><a href="https://www.digitalocean.com/community/tutorials/how-to-install-nginx-on-ubuntu-20-04">How To Install Nginx on Ubuntu 20.04</a></span></li>
        <li><span class="remote"><a href="https://gist.github.com/bradtraversy/cd90d1ed3c462fe3bddd11bf8953a896">Node.js Deployment</a></span></li>
        <li><span class="remote"><a href="https://github.com/vinyll/certbot-install#how-to-install">Certbot installer</a></span></li>
    </ol>
    <p>and a lot of Google ...</p>
    </article>
    <?php include('../../footer.html');?>
    </body>
</html>