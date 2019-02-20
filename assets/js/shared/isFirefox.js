function isFirefox() {

  if(navigator.userAgent.toLowerCase().indexOf('firefox') > -1 || window.navigator.userAgent.indexOf("Edge") > -1)
    return true;

  return false;
}

export { isFirefox };
