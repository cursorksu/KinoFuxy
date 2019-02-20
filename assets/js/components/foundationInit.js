import Foundation from '../externals/foundation-setup';
import { checkExistElementCollection } from '../shared/checkExistElementCollection';


$(() => {

  const $magellanSpy = $('#js-magellan-spy');
  
  if ( checkExistElementCollection($magellanSpy) ) {
    const test = new Foundation.Magellan($magellanSpy, {});
    console.log(test);
  }
});
