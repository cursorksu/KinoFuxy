// jQuery
const $ = require('jquery');

global.jQuery = $;

// if you want all features of foundation
// require('../../../../../node_modules/foundation-sites/dist/js/foundation.js');

// if you want only some features
// require('./node_modules/what-input/what-input');
require('../../../node_modules/foundation-sites/dist/js/plugins/foundation.core');
require('../../../node_modules/foundation-sites/dist/js/plugins/foundation.smoothScroll');
require('../../../node_modules/foundation-sites/dist/js/plugins/foundation.magellan');
// require('../../../../node_modules/foundation-sites/dist/js/plugins/foundation.util.keyboard');
// require('../../../../node_modules/foundation-sites/dist/js/plugins/foundation.util.nest');
// require('../../../../node_modules/foundation-sites/dist/js/plugins/foundation.util.box');
// require('../../../../node_modules/foundation-sites/dist/js/plugins/foundation.util.mediaQuery');
// require('../../../../node_modules/foundation-sites/dist/js/plugins/foundation.util.triggers');
// require('../../../../node_modules/foundation-sites/dist/js/plugins/foundation.util.imageLoader');
// require('../../../../node_modules/foundation-sites/dist/js/plugins/foundation.offcanvas');
// require('../../../../node_modules/foundation-sites/dist/js/plugins/foundation.drilldown');
// require('../../../../node_modules/foundation-sites/dist/js/plugins/foundation.dropdownMenu');
// require('../../../../node_modules/foundation-sites/dist/js/plugins/foundation.tabs');

export default Foundation;
