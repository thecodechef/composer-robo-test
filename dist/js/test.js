var Test = /** @class */ (function () {
    function Test(c) {
        this.command = c;
        this.init();
    }
    Test.prototype.init = function () {
        console.log(this.command);
    };
    return Test;
}());
