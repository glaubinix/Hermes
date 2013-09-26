Hermes
======

WIP

This module works together with https://github.com/glaubinix/PackagistProxyPlugin.
The idea behind it is to reuse the idea of a local packagist i.e. satis but in a different way.
Hermes is only a proxy and will still connect to packagist and github BUT only the first time a resource is requested.
Different to satis, Hermes can use the original composer.json config the only thing you need to do is to install the composer plugin.
