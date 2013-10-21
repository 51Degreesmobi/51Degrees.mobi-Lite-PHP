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
function E35($target, $test, $ls) {
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
function _H35($useragent) {
  $ls = PHP_INT_MAX;
  $dl = array();
  $ua = 'BenQ-CF61/1.00/WAP2.0/MIDP2.0/CLDC1.0 UP.Browser/6.3.0.4.c.1.102 (GUI) MMP/2.0';
  $ns = E35($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(44115,27583,19956,913, $ua, '15364-17017-3402-18092');
  }
  $ua = 'BenQ-EF51/1.00/WAP2.0/MIDP2.0/CLDC1.0 UP.Browser/6.3.0.4.c.1.102 (GUI) MMP/2.0';
  $ns = E35($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(44115,27583,19956,913, $ua, '15364-17017-3402-18092');
  }
  $ua = 'BENQ UP.Browser/6.3.0.4.c.1.102 (GUI) MMP/2.0';
  $ns = E35($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(44115,27583,19956,913, $ua, '15364-17017-3402-18092');
  }
  $ua = 'BenQ-C30/1.0/WAP2.0/MIDP2.0/CLDC1.1';
  $ns = E35($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(228251,27583,55546,913, $ua, '15466-17017-17470-18092');
  }
  $ua = 'BenQ-E61/1.00/WAP2.0 UP.Browser/6.3.0.4.c.1.102 (GUI) MMP/2.0';
  $ns = E35($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(395879,27583,19956,913, $ua, '14943-17017-3402-18092');
  }
  $ua = 'BenQ-S88/1.00/WAP2.0/MIDP2.0/CLDC1.0 UP.Browser/6.3.0.4.c.1.102 (GUI) MMP/2.0';
  $ns = E35($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(85517,27583,19956,913, $ua, '17992-17017-3402-18092');
  }
  $ua = 'BenQ-SIEMENS - E52/1.00/WAP2.0/MIDP2.0/CLDC1.0 UP.Browser/6.3.0.4.c.1.102 (GUI) MMP/2.0';
  $ns = E35($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(395447,27583,19956,913, $ua, '14935-17017-3402-18092');
  }
  $ua = 'BenQ-T51/1.0/WAP2.0/MIDP2.0/CLDC1.1 UP.Browser/6.3.0.4.c.1.105 (GUI) MMP/2.0';
  $ns = E35($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(338668,27583,19956,913, $ua, '13178-17017-3402-18092');
  }
  $ua = 'BenQ-EF71/1.00/WAP2.0/MIDP2.0/CLDC1.0 UP.Browser/6.3.0.7.c.1.105 (GUI) MMP/2.0';
  $ns = E35($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(338892,27583,19956,913, $ua, '13182-17017-3402-18092');
  }
  $ua = 'BenQ-EF71/1.00/WAP2.0/MIDP2.0/CLDC1.0 UP.Browser/6.3.0.7.c.1.103 (GUI) MMP/2.0';
  $ns = E35($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(338892,27583,19956,913, $ua, '13182-17017-3402-18092');
  }
  $ua = 'BenQ-C36/1.0/WAP2.0/MIDP2.0/CLDC1.1';
  $ns = E35($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(395807,27583,55546,913, $ua, '14941-17017-17470-18092');
  }
  $ua = 'BenQ-T60/1.0/WAP2.0/MIDP2.0/CLDC1.1';
  $ns = E35($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(296879,27583,55546,913, $ua, '12921-17017-17470-18092');
  }
  $ua = 'BenQ-T33/1.0/WAP2.0/MIDP2.0/CLDC1.1 UP.Browser/6.3.0.4.c.1.105 (GUI) MMP/2.0';
  $ns = E35($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(354584,27583,19956,913, $ua, '14275-17017-3402-18092');
  }
  $ua = 'BenQ-EF61/1.00/WAP2.0/MIDP2.0/CLDC1.0 UP.Browser/6.3.0.4.c.1.102 (GUI) MMP/2.0';
  $ns = E35($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(342461,27583,19956,913, $ua, '13262-17017-3402-18092');
  }
  $ua = 'BenQ-E81/52 Profile/MIDP-2.0 Configuration/CLDC-1.1 Browser/UP.Browser/7.2.6.1.421 (GUI) MMP/2.0 Push/PO';
  $ns = E35($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(263639,27583,13647,913, $ua, '12190-17017-3487-18092');
  }
  $ua = 'BenQ-E81/48 Profile/MIDP-2.0 Configuration/CLDC-1.1 Browser/UP.Browser/7.2.6.1.341 (GUI) MMP/2.0 Push/PO';
  $ns = E35($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(263639,27583,13647,913, $ua, '12190-17017-3487-18092');
  }
  $ua = 'BenQ-S81/1.00/WAP2.0/MIDP2.0/CLDC1.1 UP.Browser/6.3.0.3.c.4 (GUI) MMP/2.0';
  $ns = E35($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(294628,27583,19956,913, $ua, '12902-17017-3402-18092');
  }
  $ua = 'BenQ-E53/1.0 ACS-NF/3.3 QTV5.02 Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E35($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(172327,27583,37296,913, $ua, '13534-17017-3601-18092');
  }
  $ua = 'BenQ-SIEMENS - C31/1.00/WAP2.0/MIDP2.0/CLDC1.0 UP.Browser/6.3.0.4.c.1.102 (GUI) MMP/2.0';
  $ns = E35($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(393348,27583,19956,913, $ua, '14901-17017-3402-18092');
  }
  $ua = 'BenQ-S80/1.00/WAP2.0/MIDP2.0/CLDC1.1 UP.Browser/6.3.0.1.119 (GUI) MMP/2.0';
  $ns = E35($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(423327,27583,19956,913, $ua, '12022-17017-3402-18092');
  }
  return $dl;
}