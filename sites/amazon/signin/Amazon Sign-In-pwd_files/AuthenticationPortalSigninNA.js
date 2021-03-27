(function(f) {
  var haveAUI = typeof P !== 'undefined' && P.AUI_BUILD_DATE;
  if (typeof SiegeCrypto !== 'undefined') {
    if (haveAUI) {
      P.now('siege-cse').register('siege-cse:profile:AuthenticationPortalSigninNA', function(lib) {
        return f(lib || SiegeCrypto);
      });
    } else {
      f(SiegeCrypto);
    }
  } else if (haveAUI) {
    P.when('siege-cse').register('siege-cse:profile:AuthenticationPortalSigninNA', f);
  } else {
    var err = new Error('CSE library not loaded, and no AUI');
    try {
      ueLogError(err, {attribution: 'siege-cse:profile:AuthenticationPortalSigninNA', logLevel: 'WARN'});
    } catch (e) {
      throw err;
    }
  }
})(function(SiegeCrypto) {

SiegeCrypto.addProfile("AuthenticationPortalSigninNA", {
  "password": {dataType: "AuthPortalSigninPasswordNA", requiresTail: false},
});

var createDeferred = SiegeCrypto.createDeferred || (function() {
  return {
    resolve: function() {},
    reject: function(e) {
      console.error(e);
    }
  };
});

function addMissingDataType(id) {
  var deferred = createDeferred();
  if (SiegeCrypto.addLoadingDataType) {
    SiegeCrypto.addLoadingDataType(id, deferred.promise);
  }
  deferred.reject(new Error('Datatype ' + id + ' is not supported in CSE'));
}

SiegeCrypto.addDataType({
	"dataTypeId": "AuthPortalSigninPasswordNA",
	"jwkPublicKey": {"kty":"RSA","e":"AQAB","n":"gXXZV1VqZ6k_uQtyJNJy5q-qvKdqrXJNgKUO1aYc1UPBVqlhCP0GPxf-0GSo-LEtArgcbF8-j6_vSLSqztYxxF8og--rB8zAyZ8DXZaugX-UiJDQnoJL_HtXKuwIm9U7oEPoeD6H4ZDcfbsPj77xVn7UA2-a90N4aZqMC8EIfXIy1tqSbSPnxPOaiEmy8xGtG-L3RdCyc7TL0Swd_f0_DjRT6ip91IBlCmquoa-xJgZ9e44PVH4AwdyssiV4ZLEZ5yFcE0zcRb_62kx_TQptidbJ4nHocFVjmUW9YsrAWeKrBmOGZEjO4vbATYs1Yf4vgcH7Ix61EPR5sbDP4SlBWQ"},
	"providerId": "si:md5",
	"keyId": "56d14edce8e2cb6c6842c59ddaee426e"
});

return SiegeCrypto;

});
