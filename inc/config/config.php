<?php
$MAC = array (
  'db' => 
  array (
    'type' => 'mysql',
    'path' => '',
    'server' => '127.0.0.1',
    'name' => 'macvod',
    'user' => 'root',
    'pass' => '851017',
    'tablepre' => 'mac_',
  ),
  'site' => 
  array (
    'name' => '苹果CMS',
    'installdir' => '/sgv/',
    'url' => 'localhost',
    'keywords' => '免费在线电影',
    'description' => '提供最新最快的影视资讯和在线播放',
    'templatedir' => 'tencent',
    'htmldir' => 'html',
    'adsdir' => 'ads',
    'icp' => 'icp123',
    'email' => '123456@maccms.com',
    'qq' => '123456',
    'tj' => '统计代码',
  ),
  'app' => 
  array (
    'cachetype' => 0,
    'cache' => 0,
    'dynamiccache' => 0,
    'cachetime' => 60,
    'cacheid' => '',
    'memcachedhost' => '127.0.0.1',
    'memcachedport' => '11211',
    'safecode' => '123qwe',
    'pagesize' => 18,
    'expandtype' => 0,
    'playersort' => 0,
    'area' => '大陆,香港,台湾,美国,韩国,日本,泰国,新加坡,马来西亚,印度,英国,法国,加拿大,西班牙,俄罗斯,其它',
    'lang' => '国语,英语,粤语,闽南语,韩语,日语,法语,德语,其它',
    'suffix' => 'html',
    'maketime' => '2',
    'makesize' => '20',
    'isopen' => 0,
    'encrypt' => 1,
    'compress' => 0,
    'searchtime' => 5,
  ),
  'view' => 
  array (
    'vodindex' => 0,
    'vodmap' => 0,
    'vodlist' => 0,
    'vodtype' => 0,
    'vodtopicindex' => 0,
    'vodtopic' => 0,
    'voddetail' => 0,
    'vodplay' => 0,
    'voddown' => 0,
    'vodsearch' => 0,
    'artindex' => 0,
    'artmap' => 0,
    'artlist' => 0,
    'arttype' => 0,
    'arttopicindex' => 0,
    'arttopic' => 0,
    'artdetail' => 0,
    'artsearch' => 0,
    'gbook' => 0,
    'rss' => 0,
    'label' => 0,
  ),
  'path' => 
  array (
    'vodindex' => 'index',
    'vodmap' => 'vodmap',
    'vodtype' => 'vodtypehtml/{id}',
    'vodtopicindex' => 'vodtopicindex',
    'vodtopic' => 'vodtopichtml/{id}',
    'voddetail' => 'vodhtml/{id}',
    'vodplay' => 'vodplayhtml/{id}',
    'voddown' => 'voddownhtml/{id}',
    'artindex' => 'artindex',
    'artmap' => 'artmap',
    'arttype' => 'arttypehtml/{id}',
    'arttopicindex' => 'arttopicindex',
    'arttopic' => 'arttopichtml/{id}',
    'artdetail' => 'arthtml/{id}',
  ),
  'rewrite' => 
  array (
    'vodindex' => 'index-pg-{pg}',
    'vodmap' => 'vod-map',
    'vodlist' => 'vod-list-id-{id}-pg-{pg}-order-{order}-by-{by}-class-{class}-year-{year}-letter-{letter}-area-{area}-lang-{lang}',
    'vodtype' => 'vod-type-id-{id}-pg-{pg}',
    'vodtopicindex' => 'vod-topicindex-pg-{pg}',
    'vodtopic' => 'vod-topic-id-{id}-pg-{pg}',
    'voddetail' => 'vod-detail-id-{id}',
    'vodplay' => 'vod-play-id-{id}-src-{src}-num-{num}',
    'voddown' => 'vod-down-id-{id}-src-{src}-num-{num}',
    'vodsearch' => 'vod-search-pg-{pg}-wd-{wd}',
    'artindex' => 'art-index-pg-{pg}',
    'artmap' => 'art-map',
    'artlist' => 'art-list-id-{id}-pg-{pg}-order-{order}-by-{by}',
    'arttype' => 'art-type-id-{id}-pg-{pg}',
    'arttopicindex' => 'art-topicindex-pg-{pg}',
    'arttopic' => 'art-topic-id-{id}-pg-{pg}',
    'artdetail' => 'art-detail-id-{id}-pg-{pg}',
    'artsearch' => 'art-search-pg-{pg}-wd-{wd}',
    'gbook' => 'gbook-show-pg-{pg}',
    'rss' => 'map-{method}-pg-{pg}',
    'label' => 'label-{label}-pg-{pg}',
  ),
  'user' => 
  array (
    'status' => 1,
    'reg' => 1,
    'regpoint' => 1,
    'regstate' => 1,
    'popularize' => 2,
    'popularizestate' => 1,
    'reggroup' => 1,
    'weekpoint' => 100,
    'monthpoint' => 1000,
    'yearpoint' => 5000,
  ),
  'other' => 
  array (
    'filter' => 'http,//,com,cn,net,org,www',
    'gbook' => 1,
    'gbooknum' => 10,
    'gbooktime' => 10,
    'gbookverify' => 1,
    'gbookaudit' => 0,
    'comment' => 1,
    'commentnum' => 10,
    'commenttime' => 10,
    'commentverify' => 1,
    'commentaudit' => 0,
    'mood' => 0,
  ),
  'upload' => 
  array (
    'thumb' => 0,
    'thumbw' => 110,
    'thumbh' => 150,
    'picpath' => 0,
    'watermark' => 0,
    'waterlocation' => 0,
    'waterfont' => 'maccms.com',
    'remote' => 0,
    'remoteurl' => 'http://license.maccms.com/',
    'ftp' => 0,
    'ftphost' => 'img.maccms.com',
    'ftpuser' => 'user',
    'ftppass' => 'pass',
    'ftpdir' => '/wwwroot/',
    'ftpport' => '21',
    'ftpdel' => 0,
    'filter' => '*.jpg;*.jpeg;*.gif;*.png;*.bmp;*.zip;*.rar;*.txt;*.torrent',
  ),
  'interface' => 
  array (
    'pass' => '111222',
  ),
  'pay' => 
  array (
    'app' => 
    array (
      'min' => 10,
      'exc' => 1,
    ),
    'alipay' => 
    array (
      'no' => 'master@maccms.com',
      'id' => '888888',
      'key' => '000000',
    ),
    'ys' => 
    array (
      'id' => '201238303611',
      'key' => 'wxkhhbr8x9aew6c6',
    ),
  ),
  'collect' => 
  array (
    'vod' => 
    array (
      'key' => '111',
      'hitsstart' => 1,
      'hitsend' => 1000,
      'hide' => 0,
      'pic' => 0,
      'psernd' => 0,
      'psesyn' => 0,
      'inrule' => ',',
      'uprule' => ',a',
      'filter' => '色戒,色即是空',
      'tag' => 0,
      'score' => 0,
    ),
    'art' => 
    array (
      'key' => '222',
      'hitsstart' => 1,
      'hitsend' => 1000,
      'hide' => 0,
      'pic' => 0,
      'psernd' => 0,
      'psesyn' => 0,
      'inrule' => ',',
      'uprule' => ',a',
      'filter' => '无奈的人',
      'tag' => 1,
    ),
  ),
  'api' => 
  array (
    'vod' => 
    array (
      'status' => 0,
      'imgurl' => 'http://img.maccms.com/',
      'typefilter' => 'and t_hide=0',
      'vodfilter' => 'and d_hide=0',
      'pagesize' => 20,
      'cjflag' => '',
    ),
    'art' => 
    array (
    ),
  ),
  'connect' => 
  array (
    'qq' => 
    array (
      'status' => 1,
      'id' => '11',
      'key' => '22',
    ),
    'uc' => 
    array (
      'status' => 0,
      'id' => '2',
      'key' => 'maccms',
      'url' => 'http://127.0.0.1/other/discuz/uc_server',
      'dbhost' => '127.0.0.1',
      'dbuser' => 'root',
      'dbpass' => '123456',
      'dbname' => 'discuz',
      'dbpre' => '`ultrax`.pre_ucenter_',
      'ip' => '',
    ),
  ),
);
?>