# DNS Explained

Build with Jigsaw

Jigsaw docs at: http://jigsaw.tighten.co/docs/installation/

This is a local install, so build with:

> ./vendor/bin/jigsaw build

Deploy using:

> gulp --production # if using 
> ./vendor/bin/jigsaw build production
> git add build_production
> git subtree push --prefix build_production origin gh-pages
