For installation:

Please create config.php file with code:

`$db = [
       "host"     => "localhost", 
       "username" => "root",
       "password" => "root",
       "db_name"  => "auto_ads"
   ];`
 
Insert migrations to yours database:

1) 2018_03_21_001_makers.sql
2) 2018_03_21_002_models.sql
3) 2018_03_21_003_ads.sql
   
   
Change /src/view_index.php form tag attribute to yours url path;

Change /public_html/index.php line 27 header Location: to your url path;


Website: http://miroslavpetkevic.ru/auto_ads/public_html/
