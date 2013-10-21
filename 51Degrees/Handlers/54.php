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
 * Calculates the edit distance between the two strings.
 *
 * @param &$target string
 *   The string we're trying to find the closest value to.
 * @param $test string
 *   The string that we're testing against.
 * @param $ls integer
 *   The lowest score we've found so far.
 * @return integer
 *   The edit distance between the two strings.
 */
function E54($target, $test, $ls) {
  return fiftyone_degrees_edit_distance($target, $test, $ls);
}

/**
 * Returns the details of the devices that are closest to the useragent string provided.
 *
 * @param $useragent string
 *   The useragent we're trying to find.
 * @return array
 *   An array of device details for the closest devices.
 */
function _H54($useragent) {
  $ls = PHP_INT_MAX;
  $dl = array();
  $ua = 'KWC-S1310-A/1004 UP.Browser/7.2.6.1.840 (GUI) MMP/2.0';
  $ns = E54($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(167395,27583,13647,913, $ua, '13804-17017-3487-18092');
  }
  $ua = 'KWC-S1310-A/1003 UP.Browser/7.2.6.1.840 (GUI) MMP/2.0';
  $ns = E54($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(167395,27583,13647,913, $ua, '13804-17017-3487-18092');
  }
  $ua = 'KWC-S1310-A/1002 UP.Browser/7.2.6.1.840 (GUI) MMP/2.0';
  $ns = E54($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(167395,27583,13647,913, $ua, '13804-17017-3487-18092');
  }
  $ua = 'KWC-S1310-A/1103 UP.Browser/7.2.6.1.840 (GUI) MMP/2.0';
  $ns = E54($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(167395,27583,13647,913, $ua, '13804-17017-3487-18092');
  }
  $ua = 'KWC-S1310-A/1105 UP.Browser/7.2.6.1.840 (GUI) MMP/2.0';
  $ns = E54($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(167395,27583,13647,913, $ua, '13804-17017-3487-18092');
  }
  $ua = 'KWC-S1310-A/1110 UP.Browser/7.2.6.1.840 (GUI) MMP/2.0';
  $ns = E54($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(167395,27583,13647,913, $ua, '13804-17017-3487-18092');
  }
  $ua = 'KWC-Buckle/ UP.Browser/7.2.7.2.541 (GUI) MMP/2.0';
  $ns = E54($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(170006,27583,13647,913, $ua, '13513-17017-3487-18092');
  }
  $ua = 'KWC-Buckle/ UP.Browser/7.2.7.2.549 (GUI) MMP/2.0';
  $ns = E54($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(170006,27583,13647,913, $ua, '13513-17017-3487-18092');
  }
  $ua = 'KWC-Buckle/ABN1004 UP.Browser/7.2.7.2.551 (GUI) MMP/2.0';
  $ns = E54($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(170006,27583,13647,913, $ua, '13513-17017-3487-18092');
  }
  $ua = 'KWC-Buckle/ABO1008 UP.Browser/7.2.7.2.551 (GUI) MMP/2.0';
  $ns = E54($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(170006,27583,13647,913, $ua, '13513-17017-3487-18092');
  }
  $ua = 'KWC-Buckle/ABO1102 UP.Browser/7.2.7.2.551 (GUI) MMP/2.0';
  $ns = E54($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(170006,27583,13647,913, $ua, '13513-17017-3487-18092');
  }
  $ua = 'KWC-Buckle/ABO1107 UP.Browser/7.2.7.2.551 (GUI) MMP/2.0';
  $ns = E54($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(170006,27583,13647,913, $ua, '13513-17017-3487-18092');
  }
  $ua = 'KWC-Buckle/ABN1104 UP.Browser/7.2.7.2.551 (GUI) MMP/2.0';
  $ns = E54($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(170006,27583,13647,913, $ua, '13513-17017-3487-18092');
  }
  $ua = 'KWC-S2300/ABR1003 UP.Browser/7.2.7.2.551 (GUI) MMP/2.0';
  $ns = E54($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(196920,196626,13647,913, $ua, '15089-5214-3487-18092');
  }
  $ua = 'KWC-S2300-C/ACF1002 UP.Browser/7.2.7.2.549 (GUI) MMP/2.0';
  $ns = E54($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(196920,196626,13647,913, $ua, '15089-5214-3487-18092');
  }
  $ua = 'KWC-S2300/ABQ1103 UP.Browser/7.2.7.2.549 (GUI) MMP/2.0';
  $ns = E54($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(196920,196626,13647,913, $ua, '15089-5214-3487-18092');
  }
  $ua = 'KWC-S2300/ABQ1000 UP.Browser/7.2.7.2.549 (GUI) MMP/2.0';
  $ns = E54($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(196920,196626,13647,913, $ua, '15089-5214-3487-18092');
  }
  $ua = 'KWC-S2300/ABU1001 UP.Browser/7.2.7.2.552 (GUI) MMP/2.0';
  $ns = E54($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(196920,196626,13647,913, $ua, '15089-5214-3487-18092');
  }
  $ua = 'KWC-S2300/ABR1001 UP.Browser/7.2.7.2.551 (GUI) MMP/2.0';
  $ns = E54($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(196920,196626,13647,913, $ua, '15089-5214-3487-18092');
  }
  $ua = 'KWC-S2300/ABR1004 UP.Browser/7.2.7.2.551 (GUI) MMP/2.0';
  $ns = E54($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(196920,196626,13647,913, $ua, '15089-5214-3487-18092');
  }
  $ua = 'KWC-Torino/ UP.Browser/7.2.7.2.561 (GUI) MMP/2.0';
  $ns = E54($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(261030,27583,13647,913, $ua, '13616-17017-3487-18092');
  }
  $ua = 'KWC-KX18/10073 UP.Browser/6.2.3.9 (GUI) MMP/2.0';
  $ns = E54($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(44115,27583,12619,913, $ua, '15364-17017-3625-18092');
  }
  $ua = 'KWC-Rio/ACI1005 UP.Browser/7.2.7.2.563 (GUI) MMP/2.0';
  $ns = E54($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(248830,196626,13647,913, $ua, '15675-5214-3487-18092');
  }
  $ua = 'KWC-Rio/ACI1003 UP.Browser/7.2.7.2.563 (GUI) MMP/2.0';
  $ns = E54($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(248830,196626,13647,913, $ua, '15675-5214-3487-18092');
  }
  $ua = 'KWC-Rio/ACJ1005 UP.Browser/7.2.7.2.562 (GUI) MMP/2.0';
  $ns = E54($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(248830,196626,13647,913, $ua, '15675-5214-3487-18092');
  }
  $ua = 'KWC-Rio/ABY1009 UP.Browser/7.2.7.2.562 (GUI) MMP/2.0';
  $ns = E54($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(248830,196626,13647,913, $ua, '15675-5214-3487-18092');
  }
  $ua = 'KWC-Rio/ACK10006 UP.Browser/7.2.7.2.563 (GUI) MMP/2.0';
  $ns = E54($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(248830,196626,13647,913, $ua, '15675-5214-3487-18092');
  }
  $ua = 'KWC-S1300/ UP.Browser/7.2.6.1.839 (GUI) MMP/2.0';
  $ns = E54($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(156764,27583,13647,913, $ua, '11731-17017-3487-18092');
  }
  $ua = 'KWC-S1300/1007 UP.Browser/7.2.6.1.840 (GUI) MMP/2.0';
  $ns = E54($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(156764,27583,13647,913, $ua, '11731-17017-3487-18092');
  }
  $ua = 'KWC-S1300/1002 UP.Browser/7.2.6.1.840 (GUI) MMP/2.0';
  $ns = E54($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(156764,27583,13647,913, $ua, '11731-17017-3487-18092');
  }
  $ua = 'KWC-S1300/1001 UP.Browser/7.2.6.1.841 (GUI) MMP/2.0';
  $ns = E54($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(156764,27583,13647,913, $ua, '11731-17017-3487-18092');
  }
  $ua = 'KWC-S1300/ UP.Browser/7.2.6.1.838 (GUI) MMP/2.0';
  $ns = E54($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(156764,27583,13647,913, $ua, '11731-17017-3487-18092');
  }
  $ua = 'KWC-S1300/1009 UP.Browser/7.2.6.1.839 (GUI) MMP/2.0';
  $ns = E54($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(156764,27583,13647,913, $ua, '11731-17017-3487-18092');
  }
  $ua = 'KWC-S1300/10081 UP.Browser/7.2.6.1.839 (GUI) MMP/2.0';
  $ns = E54($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(156764,27583,13647,913, $ua, '11731-17017-3487-18092');
  }
  $ua = 'KWC-S1300/1007 UP.Browser/7.2.6.1.839 (GUI) MMP/2.0';
  $ns = E54($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(156764,27583,13647,913, $ua, '11731-17017-3487-18092');
  }
  $ua = 'KWC-Glide/ UP.Browser/7.2.7.2.541 (GUI) MMP/2.0';
  $ns = E54($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(274504,27583,13647,913, $ua, '12343-17017-3487-18092');
  }
  $ua = 'KWC-Lightpipe/ UP.Browser/7.2.7.2.531 (GUI) MMP/2.0';
  $ns = E54($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(274576,27583,13647,913, $ua, '14497-17017-3487-18092');
  }
  $ua = 'KWC-Lightpipe/1002 UP.Browser/7.2.7.2.531 (GUI) MMP/2.0';
  $ns = E54($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(274576,27583,13647,913, $ua, '14497-17017-3487-18092');
  }
  $ua = 'KWC-Lightpipe/1003 UP.Browser/7.2.7.2.531 (GUI) MMP/2.0';
  $ns = E54($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(274576,27583,13647,913, $ua, '14497-17017-3487-18092');
  }
  $ua = 'KWC-E1000/1.0.12 UP.Browser/7.2.6.1.537 (GUI) MMP/2.0';
  $ns = E54($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(44115,27583,13647,913, $ua, '15364-17017-3487-18092');
  }
  $ua = 'KWC-M2000/AAN1004 UP.Browser/7.2.7.2.530 (GUI) MMP/2.0';
  $ns = E54($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(275872,27583,13647,913, $ua, '12393-17017-3487-18092');
  }
  $ua = 'KWC-M2000/AAN1002 UP.Browser/7.2.7.2.530 (GUI) MMP/2.0';
  $ns = E54($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(275872,27583,13647,913, $ua, '12393-17017-3487-18092');
  }
  $ua = 'KWC-M2000/ZQ1000 UP.Browser/7.2.7.2.531 (GUI) MMP/2.0';
  $ns = E54($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(275872,27583,13647,913, $ua, '12393-17017-3487-18092');
  }
  $ua = 'KWC-M2000/ZQ1003 UP.Browser/7.2.7.2.531 (GUI) MMP/2.0';
  $ns = E54($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(275872,27583,13647,913, $ua, '12393-17017-3487-18092');
  }
  $ua = 'KWC-S4000/ UP.Browser/7.2.6.1.794 (GUI) MMP/2.0';
  $ns = E54($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(275368,27583,13647,913, $ua, '12373-17017-3487-18092');
  }
  $ua = 'KWC-S4000/10033 UP.Browser/7.2.6.1.644 (GUI) MMP/2.0';
  $ns = E54($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(275368,27583,13647,913, $ua, '12373-17017-3487-18092');
  }
  $ua = 'KWC-S1310-V/1001 UP.Browser/7.2.6.1.840 (GUI) MMP/2.0';
  $ns = E54($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(261606,27583,13647,913, $ua, '13635-17017-3487-18092');
  }
  $ua = 'KWC-laylo/AAR10044 UP.Browser/7.2.7.2.531 (GUI) MMP/2.0';
  $ns = E54($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(352640,27583,13647,913, $ua, '14226-17017-3487-18092');
  }
  $ua = 'KWC-M1400/AAZ10043 UP.Browser/7.2.7.2.536 (GUI) MMP/2.0';
  $ns = E54($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(352640,27583,13647,913, $ua, '14226-17017-3487-18092');
  }
  $ua = 'KWC-laylo/AAR1004 UP.Browser/7.2.7.2.531 (GUI) MMP/2.0';
  $ns = E54($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(352640,27583,13647,913, $ua, '14226-17017-3487-18092');
  }
  $ua = 'KWC-M1400/AAR10042 UP.Browser/7.2.7.2.531 (GUI) MMP/2.0';
  $ns = E54($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(352640,27583,13647,913, $ua, '14226-17017-3487-18092');
  }
  $ua = 'KWC-M1000/1.0.07 UP.Browser/6.2.3.9.g.1.110 (GUI) MMP/2.0';
  $ns = E54($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(280480,27583,12619,913, $ua, '12510-17017-3625-18092');
  }
  $ua = 'KWC-M1000/1.0.06 UP.Browser/6.2.3.9.g.1.110 (GUI) MMP/2.0';
  $ns = E54($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(280480,27583,12619,913, $ua, '12510-17017-3625-18092');
  }
  $ua = 'KWC-E2000/1013 UP.Browser/7.2.6.1.567 (GUI) MMP/2.0';
  $ns = E54($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(195539,27583,13647,913, $ua, '12383-17017-3487-18092');
  }
  $ua = 'KWC-E2000/1022 UP.Browser/7.2.6.1.537 (GUI) MMP/2.0';
  $ns = E54($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(195539,27583,13647,913, $ua, '12383-17017-3487-18092');
  }
  $ua = 'KWC-E2000/10086 UP.Browser/7.2.6.1.537 (GUI) MMP/2.0';
  $ns = E54($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(195539,27583,13647,913, $ua, '12383-17017-3487-18092');
  }
  $ua = 'KWC-E2000/1017 UP.Browser/7.2.6.1.537 (GUI) MMP/2.0';
  $ns = E54($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(195539,27583,13647,913, $ua, '12383-17017-3487-18092');
  }
  $ua = 'KWC-E2000/1016 UP.Browser/7.2.6.1.537 (GUI) MMP/2.0';
  $ns = E54($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(195539,27583,13647,913, $ua, '12383-17017-3487-18092');
  }
  $ua = 'KWC-K127/1204 UP.Browser/6.2.3.9.g.1.110 (GUI) MMP/2.0';
  $ns = E54($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(311554,27583,12619,913, $ua, '15674-17017-3625-18092');
  }
  $ua = 'KWC-K127/11031 UP.Browser/6.2.3.9.g.1.110 (GUI) MMP/2.0';
  $ns = E54($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(311554,27583,12619,913, $ua, '15674-17017-3625-18092');
  }
  $ua = 'KWC-K127/1002 UP.Browser/6.2.3.9.g.1.110 (GUI) MMP/2.0';
  $ns = E54($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(311554,27583,12619,913, $ua, '15674-17017-3625-18092');
  }
  $ua = 'KWC-K325/1.1.00 UP.Browser/6.2.3.9.g.1.107 (GUI) MMP/2.0';
  $ns = E54($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(143643,27583,12619,913, $ua, '13419-17017-3625-18092');
  }
  $ua = 'KWC-K325/1.0.04 UP.Browser/6.2.3.9.g.1.107 (GUI) MMP/2.0';
  $ns = E54($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(143643,27583,12619,913, $ua, '13419-17017-3625-18092');
  }
  $ua = 'KWC-K24/1.0.06 UP.Browser/6.2.3.9.g.1.109 (GUI) MMP/2.0';
  $ns = E54($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(310978,27583,12619,913, $ua, '13743-17017-3625-18092');
  }
  $ua = 'KWC-K24/1.0.07 UP.Browser/6.2.3.9.g.1.109 (GUI) MMP/2.0';
  $ns = E54($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(310978,27583,12619,913, $ua, '13743-17017-3625-18092');
  }
  return $dl;
}