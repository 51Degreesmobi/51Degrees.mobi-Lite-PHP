<?php
/**
 * @file
 * Auto Generated Code - DO NOT EDIT
 *
 * See http://51degrees.mobi/Support/Documentation/PHP#AutoGeneratedSourceCode for more details.*
 */

/**
 * See LICENSE.TXT for terms of use and copyright.
 */

/**
 * Calculates the matching score between the two strings for this handler.
 *
 * @param &$target string
 *   The string we're trying to find the closest value to.
 * @param $test string
 *   The string that we're testing against.
 * @param $ls integer
 *   The lowest score we've found so far.
 * @return integer
 *   The score between the two strings.
 */
function E125(&$target, $test, &$ls) {
  $score = 0;
  fiftyone_degrees_calculate_segment_score($target[0], $test[0], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[1], $test[1], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[2], $test[2], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  return $score;
}

/**
 * Returns the details of the devices that are closest to the
 * useragent string provided.
 *
 * @param $useragent string
 *   The useragent we're trying to find.
 * @return array
 *   An array of device details for the closest devices.
 */
function _H125($useragent) {

  $ls = PHP_INT_MAX;
  $dl = array();

  // Calculate the segments for the useragent.
  $segments = array(
    0 => fiftyone_degrees_preg_match_all('#Konqueror/\\d\\.\\d#', $useragent),
    1 => fiftyone_degrees_preg_match_all('#Ubuntu#', $useragent),
    2 => fiftyone_degrees_preg_match_all('#Fedora#', $useragent));
  $ns = E125($segments, array(0 => array(0 => 'Konqueror/3.2'), 1 => NULL, 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,124708,55546,913, 'Mozilla/5.0 (compatible; Konqueror/3.2; Linux 2.6.2)', '15364-18110-17470-18092');
    $ls = $ns;
  }
  $ns = E125($segments, array(0 => array(0 => 'Konqueror/3.1'), 1 => NULL, 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,124708,55546,913, 'Mozilla/5.0 (compatible; Konqueror/3.1; Linux; en)', '15364-18110-17470-18092');
    $ls = $ns;
  }
  $ns = E125($segments, array(0 => array(0 => 'Konqueror/3.3'), 1 => NULL, 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,124708,55546,913, 'Mozilla/5.0 (compatible; Konqueror/3.3; Linux) (KHTML, like Gecko)', '15364-18110-17470-18092');
    $ls = $ns;
  }
  $ns = E125($segments, array(0 => array(0 => 'Konqueror/4.3'), 1 => NULL, 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,124708,534329,913, 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.5 (like Gecko)', '15364-18110-20803-18092');
    $ls = $ns;
  }
  $ns = E125($segments, array(0 => array(0 => 'Konqueror/3.5'), 1 => NULL, 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,124708,477963,913, 'Mozilla/5.0 (compatible; Konqueror/3.5; Linux) KHTML/3.5.5 (like Gecko) (Debian)', '15364-18110-17825-18092');
    $ls = $ns;
  }
  $ns = E125($segments, array(0 => array(0 => 'Konqueror/3.2'), 1 => NULL, 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,487936,55546,913, 'Mozilla/5.0 (compatible; Konqueror/3.2; FreeBSD) (KHTML, like Gecko)', '15364-18145-17470-18092');
    $ls = $ns;
  }
  $ns = E125($segments, array(0 => array(0 => 'Konqueror/4.9'), 1 => NULL, 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,124708,1034950,913, 'Mozilla/5.0 (X11) KHTML/4.9.1 (like Gecko) Konqueror/4.9', '15364-18110-19819-18092');
    $ls = $ns;
  }
  $ns = E125($segments, array(0 => array(0 => 'Konqueror/4.8'), 1 => NULL, 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,124708,727466,913, 'Mozilla/5.0 (X11) KHTML/4.8.5 (like Gecko) Konqueror/4.8', '15364-18110-18565-18092');
    $ls = $ns;
  }
  $ns = E125($segments, array(0 => array(0 => 'Konqueror/4.1'), 1 => NULL, 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,124708,1308022,913, 'Mozilla/5.0 (X11) KHTML/4.10.5 (like Gecko) Konqueror/4.10', '15364-18110-21710-18092');
    $ls = $ns;
  }
  $ns = E125($segments, array(0 => array(0 => 'Konqueror/3.5'), 1 => NULL, 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,478918,477963,913, 'Mozilla/5.0 (compatible; Konqueror/3.5; Linux) KHTML/3.5.5 (like Gecko) (Kubuntu)', '15364-17843-17825-18092');
    $ls = $ns;
  }
  $ns = E125($segments, array(0 => array(0 => 'Konqueror/3.4'), 1 => NULL, 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,124708,486053,913, 'Mozilla/5.0 (compatible; Konqueror/3.4; Linux) KHTML/3.4.0 (like Gecko)', '15364-18110-17812-18092');
    $ls = $ns;
  }
  $ns = E125($segments, array(0 => array(0 => 'Konqueror/2.2'), 1 => NULL, 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,124708,499439,913, 'Mozilla/5.0 (compatible; Konqueror/2.2.2; Linux 2.4.14-xfs; X11; i686)', '15364-18110-17389-18092');
    $ls = $ns;
  }
  $ns = E125($segments, array(0 => array(0 => 'Konqueror/4.4'), 1 => NULL, 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,478918,488913,913, 'Mozilla/5.0 (compatible; Konqueror/4.4; Linux 2.6.32-22-generic; X11; en_US) KHTML/4.4.3 (like Gecko) Kubuntu', '15364-17843-17826-18092');
    $ls = $ns;
  }
  $ns = E125($segments, array(0 => array(0 => 'Konqueror/4.4'), 1 => NULL, 2 => array(0 => 'Fedora')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,650531,488913,913, 'Mozilla/5.0 (compatible; Konqueror/4.4; Linux) KHTML/4.4.1 (like Gecko) Fedora/4.4.1-1.fc12', '15364-22200-17826-18092');
    $ls = $ns;
  }
  $ns = E125($segments, array(0 => array(0 => 'Konqueror/4.5'), 1 => NULL, 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,487936,518632,913, 'Mozilla/5.0 (compatible; Konqueror/4.5; FreeBSD) KHTML/4.5.4 (like Gecko)', '15364-18145-17828-18092');
    $ls = $ns;
  }
  $ns = E125($segments, array(0 => array(0 => 'Konqueror/4.4'), 1 => NULL, 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,124708,488913,913, 'Mozilla/5.0 (compatible; Konqueror/4.4; Linux) KHTML/4.4.5 (like Gecko)', '15364-18110-17826-18092');
    $ls = $ns;
  }
  $ns = E125($segments, array(0 => array(0 => 'Konqueror/2.2'), 1 => NULL, 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,27583,499439,913, 'Mozilla/5.0 (compatible; Konqueror/2.2.2)', '15364-17017-17389-18092');
    $ls = $ns;
  }
  $ns = E125($segments, array(0 => array(0 => 'Konqueror/2.1'), 1 => NULL, 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,27583,502530,913, 'Mozilla/5.0 (compatible; Konqueror/2.1.1; X11)', '15364-17017-17388-18092');
    $ls = $ns;
  }
  $ns = E125($segments, array(0 => array(0 => 'Konqueror/2.0'), 1 => NULL, 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,27583,509410,913, 'Mozilla/5.0 (compatible; Konqueror/2.0.1; X11); Supports MD5-Digest; Supports gzip encoding', '15364-17017-17390-18092');
    $ls = $ns;
  }
  $ns = E125($segments, array(0 => array(0 => 'Konqueror/3.5'), 1 => NULL, 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,487936,477963,913, 'Mozilla/5.0 (compatible; Konqueror/3.5; FreeBSD) KHTML/3.5.10 (like Gecko)', '15364-18145-17825-18092');
    $ls = $ns;
  }
  $ns = E125($segments, array(0 => array(0 => 'Konqueror/4.0'), 1 => NULL, 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,124708,587063,913, 'Mozilla/5.0 (compatible; Konqueror/4.0; Linux) KHTML/4.0.5 (like Gecko)', '15364-18110-24472-18092');
    $ls = $ns;
  }
  $ns = E125($segments, array(0 => array(0 => 'Konqueror/4.2'), 1 => NULL, 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,124708,592576,913, 'Mozilla/5.0 (compatible; Konqueror/4.2; Linux) KHTML/4.2.2 (like Gecko)', '15364-18110-24474-18092');
    $ls = $ns;
  }
  $ns = E125($segments, array(0 => array(0 => 'Konqueror/3.5'), 1 => NULL, 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,27583,477963,913, 'Mozilla/5.0 (compatible; Konqueror/3.5) KHTML/3.5.4 (like Gecko)', '15364-17017-17825-18092');
    $ls = $ns;
  }
  $ns = E125($segments, array(0 => array(0 => 'Konqueror/4.5'), 1 => NULL, 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,478918,518632,913, 'Mozilla/5.0 (compatible; Konqueror/4.5; Linux) KHTML/4.5.3 (like Gecko) Kubuntu', '15364-17843-17828-18092');
    $ls = $ns;
  }
  $ns = E125($segments, array(0 => array(0 => 'Konqueror/3.4'), 1 => NULL, 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,27583,486053,913, 'Mozilla/5.0 (compatible; Konqueror/3.4) KHTML/3.4.2 (like Gecko)', '15364-17017-17812-18092');
    $ls = $ns;
  }
  $ns = E125($segments, array(0 => array(0 => 'Konqueror/4.6'), 1 => NULL, 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,124708,546265,913, 'Mozilla/5.0 (compatible; Konqueror/4.6; Linux) KHTML/4.6.0 (like Gecko) SUSE', '15364-18110-17829-18092');
    $ls = $ns;
  }
  $ns = E125($segments, array(0 => array(0 => 'Konqueror/3.5'), 1 => NULL, 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,482531,477963,913, 'Mozilla/5.0 (compatible; Konqueror/3.5; SunOS)', '15364-18146-17825-18092');
    $ls = $ns;
  }
  $ns = E125($segments, array(0 => array(0 => 'Konqueror/4.1'), 1 => NULL, 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,549526,657308,913, 'Mozilla/5.0 (compatible; Konqueror/4.1; OpenBSD) KHTML/4.1.4 (like Gecko)', '15364-18144-24473-18092');
    $ls = $ns;
  }
  $ns = E125($segments, array(0 => array(0 => 'Konqueror/3.5'), 1 => NULL, 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,588018,477963,913, 'Mozilla/5.0 (compatible; Konqueror/3.5; Darwin) KHTML/3.5.6 (like Gecko)', '15364-22470-17825-18092');
    $ls = $ns;
  }
  $ns = E125($segments, array(0 => array(0 => 'Konqueror/4.5'), 1 => NULL, 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,124708,518632,913, 'Mozilla/5.0 (compatible; Konqueror/4.5; Linux) KHTML/4.5.5 (like Gecko)', '15364-18110-17828-18092');
    $ls = $ns;
  }
  $ns = E125($segments, array(0 => array(0 => 'Konqueror/4.3'), 1 => NULL, 2 => array(0 => 'Fedora')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,784038,534329,913, 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.1 (like Gecko) Fedora/4.3.1-3.fc11', '15364-22201-20803-18092');
    $ls = $ns;
  }
  $ns = E125($segments, array(0 => array(0 => 'Konqueror/4.1'), 1 => NULL, 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,124708,657308,913, 'Mozilla/5.0 (compatible; Konqueror/4.1; Linux; X11)', '15364-18110-24473-18092');
    $ls = $ns;
  }
  $ns = E125($segments, array(0 => array(0 => 'Konqueror/4.6'), 1 => NULL, 2 => array(0 => 'Fedora')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,601432,546265,913, 'Mozilla/5.0 (compatible; Konqueror/4.6; Linux) KHTML/4.6.5 (like Gecko) Fedora/4.6.5-8.fc14', '15364-22194-17829-18092');
    $ls = $ns;
  }
  $ns = E125($segments, array(0 => array(0 => 'Konqueror/4.6'), 1 => NULL, 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,478918,546265,913, 'Mozilla/5.0 (compatible; Konqueror/4.6; Linux) KHTML/4.6.5 (like Gecko) Kubuntu', '15364-17843-17829-18092');
    $ls = $ns;
  }
  $ns = E125($segments, array(0 => array(0 => 'Konqueror/4.8'), 1 => NULL, 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,27583,727466,913, 'Mozilla/5.0 (X11) KHTML/4.8.4 (like Gecko) Konqueror/4.8', '15364-17017-18565-18092');
    $ls = $ns;
  }
  $ns = E125($segments, array(0 => array(0 => 'Konqueror/3.4'), 1 => NULL, 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,478918,486053,913, 'Mozilla/5.0 (compatible; Konqueror/3.4; Linux) KHTML/3.4.3 (like Gecko) (Kubuntu package 4:3.4.3-0ubuntu1)', '15364-17843-17812-18092');
    $ls = $ns;
  }
  $ns = E125($segments, array(0 => array(0 => 'Konqueror/4.1'), 1 => NULL, 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,27583,657308,913, 'Mozilla/5.0 (compatible; Konqueror/4.1; DragonFly) KHTML/4.1.4 (like Gecko)', '15364-17017-24473-18092');
    $ls = $ns;
  }
  $ns = E125($segments, array(0 => array(0 => 'Konqueror/3.5'), 1 => NULL, 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,50308,477963,913, 'Mozilla/5.0 (compatible; Konqueror/3.5; Windows NT 6.0) KHTML/3.5.6 (like Gecko)', '15364-17285-17825-18092');
    $ls = $ns;
  }
  $ns = E125($segments, array(0 => array(0 => 'Konqueror/4.2'), 1 => NULL, 2 => array(0 => 'Fedora')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,749793,592576,913, 'Mozilla/5.0 (compatible; Konqueror/4.2; Linux) KHTML/4.2.1 (like Gecko) Fedora/4.2.1-4.fc11', '15364-22203-24474-18092');
    $ls = $ns;
  }
  $ns = E125($segments, array(0 => array(0 => 'Konqueror/3.5'), 1 => NULL, 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,549526,477963,913, 'Mozilla/5.0 (compatible; Konqueror/3.5; OpenBSD) KHTML/3.5.9 (like Gecko)', '15364-18144-17825-18092');
    $ls = $ns;
  }
  $ns = E125($segments, array(0 => array(0 => 'Konqueror/4.4'), 1 => NULL, 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,27583,488913,913, 'Mozilla/5.0 (compatible; Konqueror/4.4) KHTML/4.4.5 (like Gecko)', '15364-17017-17826-18092');
    $ls = $ns;
  }
  $ns = E125($segments, array(0 => array(0 => 'Konqueror/4.1'), 1 => NULL, 2 => array(0 => 'Fedora')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,1473298,657308,913, 'Mozilla/5.0 (compatible; Konqueror/4.1; Linux 2.6.27.7-134.fc10.x86_64; X11; x86_64) KHTML/4.1.3 (like Gecko) Fedora/4.1.3-4.fc10', '15364-24184-24473-18092');
    $ls = $ns;
  }
  $ns = E125($segments, array(0 => array(0 => 'Konqueror/4.5'), 1 => NULL, 2 => array(0 => 'Fedora')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,987738,518632,913, 'Mozilla/5.0 (compatible; Konqueror/4.5; Linux) KHTML/4.5.5 (like Gecko) Fedora/4.5.5-2.fc13', '15364-22193-17828-18092');
    $ls = $ns;
  }
  $ns = E125($segments, array(0 => array(0 => 'Konqueror/2.1'), 1 => NULL, 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,124708,502530,913, 'Mozilla/5.0 (compatible; Konqueror/2.1.2; X11)', '15364-18110-17388-18092');
    $ls = $ns;
  }
  $ns = E125($segments, array(0 => array(0 => 'Konqueror/2.2'), 1 => NULL, 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,487936,499439,913, 'Mozilla/5.0 (compatible; Konqueror/2.2.2; FreeBSD)', '15364-18145-17389-18092');
    $ls = $ns;
  }
  $ns = E125($segments, array(0 => array(0 => 'Konqueror/4.3'), 1 => NULL, 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,27583,534329,913, 'Mozilla/5.0 (compatible; Konqueror/4.3) KHTML/4.3.5 (like Gecko) SUSE', '15364-17017-20803-18092');
    $ls = $ns;
  }
  $ns = E125($segments, array(0 => array(0 => 'Konqueror/3.4'), 1 => NULL, 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,487936,486053,913, 'Mozilla/5.0 (compatible; Konqueror/3.4; FreeBSD) KHTML/3.4.3 (like Gecko)', '15364-18145-17812-18092');
    $ls = $ns;
  }
  $ns = E125($segments, array(0 => array(0 => 'Konqueror/4.6'), 1 => NULL, 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,27583,546265,913, 'Mozilla/5.0 (compatible; Konqueror/4.6) KHTML/4.6.0 (like Gecko) SUSE', '15364-17017-17829-18092');
    $ls = $ns;
  }
  $ns = E125($segments, array(0 => array(0 => 'Konqueror/4.7'), 1 => NULL, 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,27583,602476,913, 'Mozilla/5.0 (X11) KHTML/4.7.4 (like Gecko) Konqueror/4.7', '15364-17017-22643-18092');
    $ls = $ns;
  }
  $ns = E125($segments, array(0 => array(0 => 'Konqueror/3.5'), 1 => NULL, 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,588025,477963,913, 'Mozilla/5.0 (compatible; Konqueror/3.5; Darwin 8.10.0; X11; Power Macintosh; en_US)KHTML/3.5.6 (like Gecko)', '17595-22472-17825-18092');
    $ls = $ns;
  }
  return $dl;
}