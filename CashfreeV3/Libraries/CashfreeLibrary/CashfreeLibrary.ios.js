/**
 * Copyright (c) 2015-present, Facebook, Inc.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 *
 * Stub of CashfreeLibrary for Android.
 *
 * @format
 * @flow
 */

'use strict';


const NativeCashfreeLibrary = require('NativeModules').CashfreeLibrary;

/**
 * High-level docs for the CashfreeLibrary iOS API can be written here.
 */

const CashfreeLibrary = {
  test: function() {
    NativeCashfreeLibrary.test();
  },
};

