# bSecure Nedir?
Get ve Post süpergloballerinden gelen verileri filtrelemek bizim için oldukça önemli.bSecure işte bu işe yarar...

# Xss Önlemek
$guv = new bSecure();
$guv->xss($_GET['veri']);

# Sadece İnteger Veri Almak
$guv->id($_GET['id']);

# Sadece Harf Almak
$guv->harf($_GET['harf']);

# Harf,Rakam ve Çizgi Almak
$guv->harf_rakam($_POST['harfrakam']);

# Url Almak
$guv->url($_GET['url']);

# Html Verisi Almak
$guv->html($_GET['html']);

# İletişim
Herhangi bir bir sorunuz olursa adreslerim aşağıda :)
http://borabozdogan.net.tr

borayazilim45@mit.tc
