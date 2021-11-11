# cleap.github.io

This is the source code for my [GitHub Pages site](https://cleap.github.io).

The .html files are created from .php files found in [dynamic\_site](https://github.com/cleap/cleap.github.io/tree/master/include).
Currently, GitHub pages cannot render dynamic sites. To make the dynamic site:

1. Host the dynamic site locally so that it is running on localhost. I am
using [Apache](https://httpd.apache.org/) and [changing the DocumentRoot](https://stackoverflow.com/a/23175981/17361285)
to point to [dynamic\_site](https://github.com/cleap/cleap.github.io/tree/master/include).

2. Run:

```bash
./make_static.sh
```
