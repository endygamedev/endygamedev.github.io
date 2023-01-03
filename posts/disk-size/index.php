<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include('../../head.html');?>
        <title>Increasing / directory at the expense of the /home directory</title>
    </head>
    <body>
    <article>
        <h1>Increasing / directory at the expense of the /home directory</h1>
        <p>i use arch btw ...</p>
        <div class="article-img">
            <img src="./meme.jpeg" alt="Meme">
        </div>
        <p>
            It just happens that I dumbass and I miscalculate the size of the root directory a bit and partitioned my 512Gb drive as follows:
        </p>
        <table class="article-table">
            <tr>
                <th>Partition</th>
                <th>Size</th>
                <th>File system</th>
                <th>Usage</th>
            </tr>
            <tr>
                <td><code><i>/dev/sda1</i></code></td>
                <td>1Gb</td>
                <td>fat32</td>
                <td>swap</td>
            </tr>
            <tr>
                <td><code><i>/dev/sda2</i></code></td>
                <td>25Gb</td>
                <td>ext4</td>
                <td>/</td>
            </tr>
            <tr>
                <td><code><i>/dev/sda3</i></code></td>
                <td>486Gb</td>
                <td>ext4</td>
                <td>/home</td>
            </tr>
        </table>
        <p>Rubbish.</p>
        <p>Over time, after installing the OS and software, I was left with ~5Gb in the root directory and it was a bit stressful, so I had to deal with the problem of expanding the root directory at the expense of <code>/home.</code></p>
        <p>I've read a lot of threads on the subject and everyone has written about how difficult it is because you can't edit partitions on the fly, which is logical because we kind of work on them at that point. It is like performing a major surgery without anesthesia, the chances are high that the person will die and it's the same with the disk.</p>
        <p>Also, many people have written about not using GParted and third party utilities because they can break the data that is in the partitions. People have suggested <span class="link"><a href="https://pingtool.org/online-resize-lvm-partitions-shrink-home-extend-root/" target="blank_">working through LVM</a></span>. OK. Nevertheless, there were those who wrote that they had already changed 1000 disks through GParted and it shouldn't bang.</p>
        <p>After reading all the tips and watching YouTube videos, I decided to risk working through GParted.</p>
        <h3>Steps of a successful people:</h3>
        <p>
            <ol class="article-ol">
                <li>Make a complete backup of everything because there is a chance that this experiment could end badly and I think you want to save your data.</li>
                <li>Download any Live-CD system:
                    <ul>
                        <li><span class="remote link"><a href="https://gparted.org/livecd.php" target="blank_">GParted Live</a></span></li>
                        <li><span class="remote link"><a href="https://ubuntu.com/download/desktop" target="blank_">Ubuntu</a></span></li>
                    </ul>
                    <small>I worked with Ubuntu because I already had a bootable flash drive.</small>
                </li> 
                <li>Make a bootable flash drive from the Live-CD image:
                    <ul>
                        <li><span class="remote link"><a href="https://www.balena.io/etcher/" target="blank_">balenaEtcher</a></span></li>
                        <li><span class="remote link"><a href="https://rufus.ie/en/" target="blank_">Rufus</a></span></li>
                    </ul>
                </li>
                <li>Plug the flash drive into the PC/laptop, enter the BIOS and change the Bootable Device to the flash drive.<br>
                    <small>This step is different for each device.</small>
                </li>
                <li>Run GParted and now, depending on the location of the partitions, cut off <code>(Resize/Move)</code> the desired amount from <code>/home</code>.<br>
                    <small>In my case I have to cut off 80Gb from the front, so we get unallocated space.</small>
                </li>
                <li>Now select the <code>/</code> partition, do <code>Resize/Move</code> again and add the <code>unallocated</code> space you got from the previous step.</li>
                <li>Then click <code>Apply All Operations</code> and wait for everything to work.</li>
                <li>Restart the device and remove the flash drive.</li>
            </ol>
        </p>
        <p>Success!</p>
        <p>This way we got a new partitioning without losing any data:</p>
        <table class="article-table">
            <tr>
                <th>Partition</th>
                <th>Size</th>
                <th>File system</th>
                <th>Usage</th>
            </tr>
            <tr>
                <td><code><i>/dev/sda1</i></code></td>
                <td>1Gb</td>
                <td>fat32</td>
                <td>swap</td>
            </tr>
            <tr>
                <td><code><i>/dev/sda2</i></code></td>
                <td>105Gb</td>
                <td>ext4</td>
                <td>/</td>
            </tr>
            <tr>
                <td><code><i>/dev/sda3</i></code></td>
                <td>406Gb</td>
                <td>ext4</td>
                <td>/home</td>
            </tr>
        </table>
    </article>
    <?php include('../../footer.php');?>
    </body>
</html>