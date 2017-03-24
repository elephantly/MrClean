<?php

/**
* primary @author purplebabar(lalung.alexandre@gmail.com)
*/

use MrClean\Terminal;

describe("Terminal", function() {
    beforeEach(function() {
        $this->_terminal = new Terminal();
    });
    describe("write()", function() {
        it("passes if echo works", function() {
            expect($this->_terminal->write('test line'))->toBe(true);
        });
    });
    describe("error()", function() {
        it("passes if echo works", function() {
            expect($this->_terminal->error('test line'))->toBe(true);
        });
    });
    describe("success()", function() {
        it("passes if echo works", function() {
            expect($this->_terminal->success('test line'))->toBe(true);
        });
    });
});
