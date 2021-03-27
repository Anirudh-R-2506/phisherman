window._automatic_tracking_config = {
    samplingRate: {
        '.ebay.com.sg': 100, // Singapore
        '.ebay.ie': 100, // Ireland
        '.ebay.es': 100, // Spain
        '.ebay.co.uk': 100, // UK
        '.ebay.de': 100, // German
        '.ebay.com.au': 100, // Australia
        '.ebay.com': 100, // US
        '.ebay.fr': 100, // France
        '.ebay.ca': 100, // Canada
        '.ebay.at': 100, // Austria
        '.befr.ebay.be': 100, // Belgium (French)
        '.benl.ebay.be': 100, // Belgium (Dutch)
        '.ebay.ch': 100, // Switzerland
        '.ebay.com.hk': 100, // HongKong
        '.ebay.in': 100, // India
        '.ebay.it': 100, // Italy
        '.ebay.com.my': 100, // Malaysia
        '.ebay.nl': 100, // Netherlands
        '.ebay.ph': 100, // Philippines
        '.ebay.pl': 100, // Poland
        '.cafr.ebay.ca': 100, // Canada (French)
    },
    prodEndpoint: function(hostname) {
        // get endpoint domain
        var endpointIndex = hostname.indexOf('.ebay.');
        if (endpointIndex !== -1) {
            var endpointDomain = hostname.substring(endpointIndex);
            var befrIndex = hostname.indexOf('.befr.ebay.be');
            if (befrIndex !== -1) {
                endpointDomain = hostname.substring(befrIndex);
            }
            var benlIndex = hostname.indexOf('.benl.ebay.be');
            if (benlIndex !== -1) {
                endpointDomain = hostname.substring(benlIndex);
            }
            var cafrIndex = hostname.indexOf('.cafr.ebay.ca');
            if (cafrIndex !== -1) {
                endpointDomain = hostname.substring(cafrIndex);
            }
            return 'https://backstory' + endpointDomain + '/customer/v1';
        }
        return 'https://backstory.ebay.com/customer/v1';
    },
};
