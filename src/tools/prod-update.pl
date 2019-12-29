#!/usr/bin/perl --
use strict;

# Just a simple copy of all public files, for now.
# Don't go overboard on error checking, this will probably be short-lived.

my $from_dir = q{/home/jcullin/test.joecullin.com};
my $prod_dir = q{/home/jcullin/joecullin.com};

my @files = qw(
assets
includes
favicon.ico
.htaccess
projects
index.php
error.html
about
);

chdir($from_dir) or die("can't chdir to $from_dir");
for my $file (@files){
  my $cmd = qq{cp -R $file $prod_dir};
  print "$cmd\n";
  system($cmd);
}

print "\ndone.\n";
