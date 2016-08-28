function UiSwitch(input){
    if(input instanceof Node){
        this.init(input);
    }

    if(input instanceof NodeList){
        var switches = [];
        [].forEach.call(input, function(node){
            switches.push(new UiSwitch(node));
        });
        return switches;
    }

    if(typeof input === "string"){
        var queryResult = qsa(input);
        if(queryResult.length){
            return queryResult.length === 1 ? new UiSwitch(queryResult[0]) : new UiSwitch(queryResult);
        }
    }
}

UiSwitch.prototype.init = function(node){
    this.dom = node;
    this.dom.addEventListener('change', this.changeHandler.bind(this));
};

UiSwitch.prototype.changeHandler = function(e){
    log(e);
}

UiSwitch.prototype.queryDom = function(selector){
    return qsa(selector);
};

var sw = new UiSwitch('.ui-switch');
log(sw);
