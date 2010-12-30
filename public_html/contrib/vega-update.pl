#!/usr/bin/perl

# vega-update.pl
# i recommend running from cron every 10 minutes

# Requirements:
# 1 .You must have the lynx browser installed on your system.
# 2. The Perl module Digest::MD5
# 3. The Perl module File::Copy

use Digest::MD5;
use File::Copy;

my($val1, $val2);

# location of the file that is created from the contents 
# of the vegadns records table
my $file = "/tmp/dom_tmp";

# you will need to change these to where you installed djbdns 

my $loc1 = "/etc/tinydns/root";
my $loc2 = "/etc/tinydns2/root";

# this is where you put the http-location of your vegadns install

my $httploc = 'http://127.0.0.1/index.php?state=get_data';

my $file1 = "$loc1" . "/data";
my $file2 = "$loc2" . "/data";

&gathr;
&cmpr;
if($val1 ne $val2) {
        &cpnrst;
} else {
        exit;
}


sub cmpr {
        open(FILE, $file) or die "Can't open '$file': $!";
        open(FILE1, $file1) or die "Can't open '$file': $!";
        binmode(FILE);
        binmode(FILE1);


        $val1 =  Digest::MD5->new->addfile(*FILE)->hexdigest;
        $val2 =  Digest::MD5->new->addfile(*FILE1)->hexdigest;
        close(FILE);
        close(FILE1);
}

# Change the path to lynx below to whatever your's is

sub gathr {
        system("/usr/local/bin/lynx -source $httploc > /tmp/dom_tmp"); }

sub cpnrst {
        copy("$file", "$file1");
        copy("$file1", "$file2");
        system("cd $loc1 && make");
        system("cd $loc2 && make");
}
