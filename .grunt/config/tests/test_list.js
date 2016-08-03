/// <reference path="../js/main.js">
describe("first test", function() {


    it("says hello", function() {
        expect(helloWorld()).toEqual("Hello world!");
    });

    it("says hello KES", function() {
        expect(helloWorld('KES')).toEqual("Hello KES!");
    });

});