<?php
$current = '0.11.3';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>VegaDNS</title>
<link rel="STYLESHEET" type="text/css" href="core-style.css">

<meta name="description" content="PHP data editor for djbdns">
<meta name="keywords" content="djbdns, web hosting, dns, djb, dan bernstein, php, mysql, data editor, unix, linux, rfc 1035, qmail, gpl, free, open source, os x, freebsd, dnscache, tinydns, gnu">
        <!--[if gte IE 5.5000]>
        <script type="text/javascript" src="pngfix.js"></script>
        <![endif]-->

</head>
<body background="images/background.gif">
<font size=-1>Last modified: <?php echo strftime("%b %d, %Y %H:%M", filemtime("index.php"))?></font><br />

<center>
<img src="images/vegadns.png" alt="VegaDNS Logo" border="0"><br>
tinydns administration
<p>
VegaDNS is a <a href="http://cr.yp.to/djbdns/tinydns.html">tinydns</a> administration tool written in PHP to allow easy administration of DNS records through a web browser.
</center>
<p>


<b>Features</b>
<ul>
    <li>Tiered access with Senior Admin, Group Admin, and User levels</li>
    <li>Import multiple domains at once via AXFR</li>
    <li>Uses the <a href="http://smarty.net">Smarty</a> template engine for clear separation of PHP from HTML</li>
    <li>Web configurable Default Records to auto-populate new domains with</li>
    <li>Free (GPL)</li>
</ul>

<b>Requirements</b>

<ul>
    <li> PHP 4 (Requires register_globals to be Off for security, as well as safe_mode off for shell_exec())</li>
    <li> MySQL</li>
    <li> djbdns (<a href="http://cr.yp.to/djbdns.html">http://cr.yp.to/djbdns.html</a>)</li>
    <li> ucspi-tcp (<a href="http://cr.yp.to/ucspi-tcp.html">http://cr.yp.to/ucspi-tcp.html</a>)</li>
    <li> daemontools (<a href="http://cr.yp.to/daemontools/install.html">http://cr.yp.to/daemontools/install.html</a>)</li>
    <li> wget (<a href="http://www.gnu.org/directory/wget.html">http://www.gnu.org/directory/wget.html</a>)</li>
</ul>

<b>Download</b>
<ul>
    <li>Download <a href="https://github.com/shupp/VegaDNS/zipball/<?php echo $current ?>">current version</a> (<?php echo $current ?>)</li>
    <li>All <a href="https://github.com/shupp/VegaDNS/archives/master">downloads</a></li>
</ul>

<b>Documentation</b>
<ul>

    <li><a href="https://github.com/shupp/VegaDNS/blob/master/README">README</a></li>
    <li><a href="https://github.com/shupp/VegaDNS/blob/master/INSTALL">INSTALL</a></li>
    <li><a href="https://github.com/shupp/VegaDNS/blob/master/TODO">TODO</a></li>
    <li><a href="https://github.com/shupp/VegaDNS/blob/master/CREDITS">CREDITS</a></li>
    <li><a href="https://github.com/shupp/VegaDNS/blob/master/COPYING">COPYING</a> (GPL v.2)</li>
</ul>

<b>Screen Shots</b>
<ul>
    <li><a href="images/screenshots/accounts.jpg">Accounts</a></li>
    <li><a href="images/screenshots/domains.jpg">Domains</a></li>
    <li><a href="images/screenshots/login.jpg">Login</a></li>
    <li><a href="images/screenshots/new_domain.jpg">New Domain</a></li>
    <li><a href="images/screenshots/add_record.jpg">Add Record</a></li>
    <li><a href="images/screenshots/dns_query2.jpg">DNS Query</a></li>
    <li><a href="images/screenshots/edit_account.jpg">Edit Account</a></li>
    <li><a href="images/screenshots/edit_domain.jpg">Edit Domain</a></li>
    <li><a href="images/screenshots/axfr.jpg">AXFR Import</a></li>
    <li><a href="images/screenshots/edit_default.jpg">Edit Default Records</a></li>
    <li><a href="images/screenshots/edit_record.jpg">Edit Record</a></li>
</ul>

<b>Contributed scripts</b>
<ul>
    <li><a href="contrib/">contrib</a></li>
</ul>

<b>Support</b>
<ul>
    <li><a href="https://github.com/shupp/VegaDNS/issues">Issues</a></li>
    <li><a href="http://groups.google.com/group/vegadns">Google Group</a></li>
    <li><a href="http://sourceforge.net/mailarchive/forum.php?forum_name=vegadns-users">Archive</a> of support mailing list on SourceForge (2009-2010)</li>
    <li><a href="http://www.mail-archive.com/users@vegadns.org/">Archive</a> of support mailing list from 2003-2009</li>
</ul>

<p><b>Follow VegaDNS on <a href="http://twitter.com/vegadns">twitter</a> and <a href="http://github.com/shupp/vegadns">github</a></b></p>

</body>
</html>
