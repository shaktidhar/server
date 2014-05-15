<?php

/**
 * This script is used to set the delivery profile ids on either a given partner or a given storage profile.
 */

require_once(dirname(__FILE__).'/../bootstrap.php');

/**
 * Parameters 
 * -------------- 
 */

function setDeliveryId($partnerId, $storageId, $deliveryIds) {

	// don't add to database if one of the parameters is missing or is an empty string
	if ((!$partnerId && !$storageId) || (!$deliveryIds) )
	{
		die ('Missing parameter');
	}

	if($partnerId) {

		$partner = PartnerPeer::retrieveByPK($partnerId);
		if(!$partner)
			die("No such partner with id [$partnerId].".PHP_EOL);

		$partner->setDeliveryProfileIds($deliveryIds);
		$partner->save();
	}

	if($storageId) {
		$storage = StorageProfilePeer::retrieveByPK($storageId);
		if(!$storageId)
			die("No such storage profile with id [$storageId].".PHP_EOL);

		$storage->setDeliveryProfileIds($deliveryIds);
		$storage->save();
	}
}

function getDeliveryIdsStorage($storageId)
{
	if($storageId == 241 || $storageId == 332)
		return array("http" => 222, "rtmp"=>1632, "hdnetwork"=>1782);
	if($storageId == 3571)
		return array("http" => 232, "applehttp"=>622, "hdnetworkmanifest"=>942);
	if($storageId == 451)
		return array("http" => 242, "applehttp"=>1282);
	if($storageId == 471)
		return array("http" => 322, "applehttp"=>1242);
	if($storageId == 1451)
		return array("http" => 252, "hdnetwork"=>1812);
	if($storageId == 171)
		return array("http" => 532, "hdnetwork"=>1832);
	if($storageId == 1531)
		return array("http" => 632, "applehttp"=>1252);
	if(in_array($storageId ,array(1252,3161)))
		return array("http"=>502, "rtmp" => 262,"applehttp" => 592);
	if($storageId == 3301)
		return array("http" => 282);
	if($storageId == 1471)
		return array("http" => 402);
	if($storageId == 2042)
		return array("http"=>1212, "applehttp" => 332, "hdnetwork"=>972);
	if($storageId == 1422)
		return array("http"=>1682, "applehttp" => 372 , "rtmp"=>372);
	if($storageId == 1481)
		return array("http" => 382, "rtmp"=>432, "rtsp"=>1102 , "applehttp"=>1202);
	if($storageId == 101)
		return array("http" => 1862);
	if($storageId == 281)
		return array("http" => 392);
	if($storageId == 491)
		return array("http" => 442);
	if($storageId == 561)
		return array("http" => 1152);
	if($storageId == 1441)
		return array("http" => 492);
	if($storageId == 3362)
		return array("http"=>1232, "rtmp" => 422, "applehttp"=>1062, "hdnetworkmanifest"=>1512);
	if($storageId == 3291)
		return array("http" => 512, "applehttp"=>572, "hdnetworkmanifest" => 612);
	if($storageId == 1541)
		return array("http" => 522, "rtmp"=>1082);
	if($storageId == 2961)
		return array("http" => 542, "applehttp" => 912);
	if($storageId == 1651)
		return array("http" => 552, "hdnetwork"=>1372);
	if($storageId == 3572)
		return array("http" => 742);
	if($storageId == 1561)
		return array("http" => 772);
	if($storageId == 1571 || $storageId == 3791)
		return array("http" => 782);
	if($storageId == 3121)
		return array("http" => 812);
	if($storageId == 1841)
		return array("http" => 802, "rtmp"=>1272);
	if($storageId == 3482)
		return array("http" => 822);
	if($storageId == 1621)
		return array("http" => 1052);
	if($storageId == 1961)
		return array("http" => 1092, "hdnetworkmanifest"=>1192, "applehttp"=>1262);
	if($storageId == 521)
		return array("rtmp" => 902, "applehttp"=>1122, "http"=>1132);
	if($storageId == 361)
		return array("rtmp" => 1072);
	if($storageId == 3361)
		return array("hdnetworkmanifest" => 862,"applehttp"=>1822,"http"=>1842);
	if($storageId == 3021)
		return array("hdnetworkmanifest" => 962, "http"=>1032);
	if($storageId == 1711 || $storageId == 1721 || $storageId == 1581)
		return array("http" => 792);
	if($storageId == 3531)
		return array("http"=>1692, "hdnetwork" => 1292, "applehttp"=>1552);
	if($storageId == 161)
		return array("http"=>1332, "rtmp" => 1302);
	if($storageId == 2751)
		return array("http" => 1322);
	if($storageId == 3772)
		return array("http" => 1352);
	if($storageId == 3582)
		return array("http" => 1402);
	if($storageId == 3822)
		return array("http"=>1452,"hds"=>1462, "applehttp"=>1472);
	if($storageId == 3421)
		return array("rtmp" => 1382,"http"=>1852);
	if($storageId == 1671)
		return array("http"=>1772, "rtmp" => 1492);
	if($storageId == 3171)
		return array("http" => 1502);
	if($storageId == 1881)
		return array("http" => 1522);
	if($storageId == 61)
		return array("http" => 1562);
	if($storageId == 3141)
		return array("rtmp" => 1572);
	if($storageId == 3552)
		return array("http" => 1712);
	if($storageId == 982)
		return array("http" => 1722);
	if($storageId == 1761)
		return array("http" => 1732);
	if($storageId == 4011)
		return array("http" => 82);
	if($storageId == 2871 || $storageId == 2851 || $storageId == 2881 || $storageId == 2831 || $storageId == 2841 || $storageId == 2861)
		return array("hdnetworkmanifest"=>272, "http" => 302, "applehttp"=>312, "hdnetwork"=>1622);

	return null;
}

function getDeliveryIdsPartner($partnerId)
{
	if($partnerId == 557781)
		return array("http"=>202, "applehttp"=>292, "rtmp"=>362, "hdnetwork"=>1652);
	if($partnerId == 713821)
		return array("http"=>212, "hdnetwork"=>462, "applehttp"=>602);
	if($partnerId == 787781)
		return array("hdnetwork"=>342, "http"=>562, "applehttp"=>582);
	if($partnerId == 459791 || $partnerId == 923261 || $partnerId == 461031 || $partnerId == 931901)
		return array("http"=>array(412,1672), "rtmp"=>472, "applehttp"=>352, "hdnetwork"=>882);
	if($partnerId == 506471)
		return array("http"=>732);
	if($partnerId == 1393581)
		return array("http"=>752);
	if($partnerId == 1076322)
		return array("http"=>922, "hdnetworkmanifest"=>1162, "applehttp"=>1602);
	if($partnerId == 519892)
		return array("http"=>832,"rtmp"=>1642);
	if($partnerId == 671421)
		return array("http"=>852, "applehttp"=>842, "hdnetwork"=>872);
	if($partnerId == 750581)
		return array("rtmp"=>762, "http"=>1042);
	if(in_array($partnerId, array(568251,811441, 1073192, 1067272, 295072,529921, 953181, 650742,1403701,931422,930821,1464621,1597381,1478611,1078952,999681,1066392,1161281,1270801,1294151,1401101,1422242,1501441,1501461,1507851,1511201,1595491,1647401,1669991,1673941,1674912,1682301,965401,944901,923171,823192,662751,662751,620392,490861,344392,27017,1682322,1684381,1684892,1687501,1687972,1276221,1687932,1511271,498961,450,1516611,797802,1671211,1560811,361531,1623332,1600101,1535221,1278951,1688392,1100092,1464811,1498031,1688592,1609661,1683852,1688542,1353001,182002,1688122,1157612,1680682,1493231,1616531,1687602,1689302,1688852,1684192,1689572,417271,1689332,1689872,893941,2222,1134922,1689462,1662641,1509391,1670441,1643701,1683642,487101,1677211,1685062,1677841)))
		return array("rtmp"=>152);
	if($partnerId == 24852)
		return array("http"=>array(72,92), "rtmp"=>152);
	if(in_array($partnerId, array(980881,1603191,1067282,1402142)))
		return array("http"=>92, "rtmp"=>162);
	if($partnerId == 928302)
		return array("hdnetwork"=>932, "http"=>952, "applehttp"=>1752);
	if($partnerId == 763312)
		return array("http"=>982);
	if($partnerId == 942902)
		return array("hdnetworkmanifest"=>1792,"hdnetwork"=>1802);
	if($partnerId == 930831)
		return array("rtmp"=>992);
	if($partnerId == 1538561)
		return array("http"=>1002);
	if($partnerId == 284252)
		return array("http"=>1022,"applehttp"=>1662, "hdnetwork"=>1762);
	if($partnerId == 571971)
		return array("rtmp"=>1312);
	if($partnerId == 756271)
		return array("http"=>1612, "hdnetwork"=>1222, "applehttp"=>1142);
	if(in_array($partnerId, array(1449362, 1355621)))
		return array("http"=>1182, "rtmp"=>152);
	if($partnerId == 520441)
		return array("http"=>1182);
	if($partnerId == 1055612)
		return array("http"=>1182);
	if($partnerId == 695492)
		return array("http"=>1362);
	if($partnerId == 302882)
		return array("rtsp"=>1582);
	if($partnerId == 1069962)
		return array("http"=>1592);
	if($partnerId == 751521)
		return array("rtmp"=>1742);
	if($partnerId == 1077822)
		return array("hdnetworkmanifest"=>1162);
	if($partnerId == 1619032)
		return array("http"=>1422,"hds"=>1432, "applehttp"=>1442);
	if(in_array($partnerId, array(1423662, 8142366,298121)))
		return array("http"=>array(72,92));
	if(in_array($partnerId , array(891502, 1122772, 1038482, 1329972,812561,1038472,813991,620992,811482,961022,1507941,1153021,1317681,1336401,1486611,1492301,1590012,1595191,685742,481141,351361,1336361,1355991,898511,608752,1300351,726932,425001,979191,1660601,1488531,1198291,374401,1563471)))
		return array("http"=>92, "rtmp"=>152);

	$secured = array(0,3213,33942,34743,37945,112112,143472,156652,208082,225802,226482,247202,275602,295072,297422,305482,325802,325822,331501,336061,336291,336311,336441,336581,348191,352452,355991,356021,368641,372651,373051,373061,373461,373491,380211,384591,386351,387001,389581,393531,395891,395911,396031,396041,396061,396071,396081,398981,401711,408311,412401,414311,420261,423851,426351,435551,439721,470781,475261,482261,486891,504861,505811,505821,506471,508291,518251,520641,520801,524241,524261,525791,526901,529921,537811,542131,547281,549951,552701,566941,568061,568251,573351,579211,580271,585831,595571,599052,601932,622322,626772,627792,633752,640081,660322,664032,664402,669252,670542,670832,670882,671541,672802,675992,697561,710732,715282,718022,723092,728161,730522,737192,739022,739972,742562,744912,746232,757672,762532,762871,762901,762921,763312,764021,764031,764041,764162,771902,775322,780472,784502,795792,800472,800822,801372,802792,802912,811262,812501,813811,820672,822452,844512,851242,851932,852782,858162,870161,870171,870181,870191,870211,874562,875742,879252,886232,889011,889021,890551,891502,900821,901551,921342,928291,928552,931221,952201,956951,957391,959472,961381,972151,973941,975302,976461,980371,980791,983291,987552,992422,996171,1004581,1007981,1012101,1019072,1020772,1020782,1023422,1033932,1034771,1037271,1038482,1047862,1050651,1055781,1057102,1067272,1067292,1067462,1077152,1079102,1081632,1082912,1096922,1098582,1103082,1103092,1103102,1103122,1122772,1126682,1126762,1133581,1141912,1142562,1144511,1147102,1147982,1151611,1155802,1157402,1161112,1165752,1168542,1169392,1170602,1171332,1181422,1188822,1189912,1189942,1196161,1198721,1259101,1262931,1282741,1287241,1301111,1301391,1301731,1302621,1306501,1307941,1309482,1315692,1315742,1316921,1320581,1327241,1332041,1338341,1339561,1340892,1342611,1346621,1352831,1362782,1371761,1372381,1372621,1387021,1392471,1392501,1392761,1393292,1396221,1398391,1400871,1409362,1415611,1421291,1424291,1432961,1432971,1433862,1447371,1449362,1451171,1451691,1454141,1458241,1459281,1464621,1465551,1467031,1471902,1484431,1488382,1491571,1492301,1492661,1496201,1496821,1507961,1507971,1511281,1512561,1513041,1518951,1524421,1525932,1529591,1530221,1532971,1535652,1536481,1538561,1539881,1556491,1567751,1582871,1587291,1590012,1601031,1617692,1617702,1628022,1628042,1628912,1630302,1635482,1636571,1640601,1649431,1663601,1663611,1665101,1665211,1672761,1673571,1673581,1675211,1683381,1698261,1709611,1709621,17291,31160,35184,58742,351371,352391,373501,381061,391901,395311,414661,415991,458261,486811,489211,496321,592462,592492,613782,810451,820961,895641,1116112,1147242,1161232,1197662,1207301,1233642,1233652,1383102,1383112,1384471,1449051,1487131,1597171,1598131,1675011,576651,328631,269822,333261,619672,1090132,1366762,1477761,1588072,1500101,1363931,1581781,475671,730212,491681,432521);

	if(in_array($partnerId , $secured))
		return array("http"=>92);

	return null;
}

$partnerIds = array(3213,33942,34743,37945,112112,143472,156652,208082,225802,226482,247202,275602,295072,297422,305482,325802,325822,331501,336061,336291,
		336311,336441,336581,348191,352452,355991,356021,368641,372651,373051,373061,373461,373491,380211,384591,386351,387001,389581,393531,395891,395911,
		396031,396041,396061,396071,396081,398981,401711,408311,412401,414311,420261,423851,426351,435551,439721,470781,475261,482261,486891,504861,505811,
		505821,506471,508291,518251,520641,520801,524241,524261,525791,526901,529921,537811,542131,547281,549951,552701,566941,568061,568251,573351,579211,
		580271,585831,595571,599052,601932,622322,626772,627792,633752,640081,660322,664032,664402,669252,670542,670832,670882,671541,672802,675992,697561,
		710732,715282,718022,723092,728161,730522,737192,739022,739972,742562,744912,746232,757672,762532,762871,762901,762921,763312,764021,764031,764041,
		764162,771902,775322,780472,784502,795792,800472,800822,801372,802792,802912,811262,812501,813811,820672,822452,844512,851242,851932,852782,858162,
		870161,870171,870181,870191,870211,874562,875742,879252,886232,889011,889021,890551,891502,900821,901551,921342,928291,928552,931221,952201,956951,
		957391,959472,961381,972151,973941,975302,976461,980371,980791,983291,987552,992422,996171,1004581,1007981,1012101,1019072,1020772,1020782,1023422,
		1033932,1034771,1037271,1038482,1047862,1050651,1055781,1057102,1067272,1067292,1067462,1077152,1079102,1081632,1082912,1096922,1098582,1103082,
		1103092,1103102,1103122,1122772,1126682,1126762,1133581,1141912,1142562,1144511,1147102,1147982,1151611,1155802,1157402,1161112,1165752,1168542,
		1169392,1170602,1171332,1181422,1188822,1189912,1189942,1196161,1198721,1259101,1262931,1282741,1287241,1301111,1301391,1301731,1302621,1306501,
		1307941,1309482,1315692,1315742,1316921,1320581,1327241,1332041,1338341,1339561,1340892,1342611,1346621,1352831,1362782,1371761,1372381,1372621,
		1387021,1392471,1392501,1392761,1393292,1396221,1398391,1400871,1409362,1415611,1421291,1424291,1432961,1432971,1433862,1447371,1449362,1451171,
		1451691,1454141,1458241,1459281,1464621,1465551,1467031,1471902,1484431,1488382,1491571,1492301,1492661,1496201,1496821,1507961,1507971,1511281,
		1512561,1513041,1518951,1524421,1525932,1529591,1530221,1532971,1535652,1536481,1538561,1539881,1556491,1567751,1582871,1587291,1590012,1601031,
		1617692,1617702,1628022,1628042,1628912,1630302,1635482,1636571,1640601,1649431,1663601,1663611,1665101,1665211,1672761,1673571,1673581,1675211,
		1683381,1698261,1709611,1709621,17291,31160,35184,58742,351371,352391,373501,381061,391901,395311,414661,415991,458261,486811,489211,496321,592462,
		592492,613782,810451,820961,895641,1116112,1147242,1161232,1197662,1207301,1233642,1233652,1383102,1383112,1384471,1449051,1487131,1597171,1598131,
		1675011,576651,328631,269822,333261,619672,1090132,1366762,1477761,1588072,1500101,1363931,1581781,475671,730212,491681,432521,1055612,1069962,
		1076322,1077822,1393581,1538561,1619032,24852,284252,302882,459791,923261,461031,931901,506471,519892,520441,571971,671421,695492,713821,750581,
		751521,756271,763312,787781,928302,930831,942902,891502, 1122772, 1038482, 1329972,812561,1038472,813991,620992,811482,961022,1507941,1153021,
		1317681,1336401,1486611,1492301,1590012,1595191,685742,481141,351361,1336361,1355991,898511,608752,1300351,726932,425001,979191,1660601,1488531,
		1198291,374401,1563471,1423662, 8142366,298121,1449362, 1355621,568251,811441, 1073192, 1067272, 295072,529921, 953181, 650742,1403701,931422,
		930821,1464621,1597381,1478611,1078952,999681,1066392,1161281,1270801,1294151,1401101,1422242,1501441,1501461,1507851,1511201,1595491,1647401,
		1669991,1673941,1674912,1682301,965401,944901,923171,823192,662751,662751,620392,490861,344392,27017,1682322,1684381,1684892,1687501,1687972,1276221,
		1687932,1511271,498961,450,1516611,797802,1671211,1560811,361531,1623332,1600101,1535221,1278951,1688392,1100092,1464811,1498031,1688592,1609661,
		1683852,1688542,1353001,182002,1688122,1157612,1680682,1493231,1616531,1687602,1689302,1688852,1684192,1689572,417271,1689332,1689872,893941,2222,
		1134922,1689462,1662641,1509391,1670441,1643701,1683642,487101,1677211,1685062,1677841,980881,1603191,1067282,1402142,557781);

$storageIds = array(101,1422,1441,1451,1471,1481,1531,1541,1561,1571,3791,161,1621,1651,1671,171,1711,1721,1581,1761,1841,1881,1961,2042,241,332,2751,281,
		2871,2851,2881,2831,2841,2861,2961,3021,3121,3141,3171,3291,3301,3361,3362,3421,3482,3531,3552,3571,3572,3582,361,3772,3822,4011,451,471,491,521,
		561,61,9821252,3161);
		
// foreach($partnerIds as $partnerId) {
// 	$deliveryIds = getDeliveryIdsPartner($partnerId);
// 	setDeliveryId($partnerId, null, $deliveryIds);
// }

// foreach ($storageIds as $storageId) {
// 	$deliveryIds = getDeliveryIdsStorage($storageId);
// 	setDeliveryId(null, $storageId, $deliveryIds);
// }

setDeliveryId(null, 1, array("http"=>array(3,4), "rtmp" =>5));
echo "Done.";
