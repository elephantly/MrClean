<?php

use MrClean\Command;
/**
* primary @author purplebabar(lalung.alexandre@gmail.com)
*/

describe("Command", function() {
    context("No Args", function() {
        beforeAll(function() {
            $this->_command = new Command(array());
        });
        describe("hasFlags()", function() {
            it("is int", function() {
                expect($this->_command->hasFlags())->toBeA('int');
            });
            it("is 0", function() {
                expect($this->_command->hasFlags())->toBe(0);
            });
        });
        describe("getFlags()", function() {
            it("is array", function() {
                expect($this->_command->getFlags())->toBeA('array');
            });
            it("is array()", function() {
                expect($this->_command->getFlags())->toBe(array());
            });
        });
        describe("is()", function() {
            it("is boolean", function() {
                expect($this->_command->is())->toBeA('boolean');
            });
            it("is boolean", function() {
                expect($this->_command->is('test'))->toBeA('boolean');
            });
            it("is false", function() {
                expect($this->_command->is())->toBe(false);
            });
            it("is false", function() {
                expect($this->_command->is('test'))->toBe(false);
            });
        });
    });
    context("Flagged", function() {
        beforeAll(function() {
            $this->_command = new Command(array('bin/hardclean', '--test'));
        });
        describe("hasFlags()", function() {
            it("is int", function() {
                expect($this->_command->hasFlags())->toBeA('int');
            });
            it("is greater than 0", function() {
                expect($this->_command->hasFlags())->toBeGreaterThan(0);
            });
        });
        describe("getFlags()", function() {
            it("is array", function() {
                expect($this->_command->getFlags())->toBeA('array');
            });
            it("is array()", function() {
                expect($this->_command->getFlags())->toBe(array('--test'));
            });
        });
        describe("is()", function() {
            it("is boolean", function() {
                expect($this->_command->is())->toBeA('boolean');
            });
            it("is boolean", function() {
                expect($this->_command->is('test'))->toBeA('boolean');
            });
            it("is false", function() {
                expect($this->_command->is())->toBe(false);
            });
            it("is false", function() {
                expect($this->_command->is('test'))->toBe(true);
            });
        });
    });
    context("Not Flagged", function() {
        beforeAll(function() {
            $this->_command = new Command(array('bin/hardclean', 'testarg'));
        });
        describe("hasFlags()", function() {
            it("is int", function() {
                expect($this->_command->hasFlags())->toBeA('int');
            });
            it("is greater than 0", function() {
                expect($this->_command->hasFlags())->toBe(0);
            });
        });
        describe("getFlags()", function() {
            it("is array", function() {
                expect($this->_command->getFlags())->toBeA('array');
            });
            it("is array()", function() {
                expect($this->_command->getFlags())->toBe(array());
            });
        });
        describe("is()", function() {
            it("is boolean", function() {
                expect($this->_command->is())->toBeA('boolean');
            });
            it("is boolean", function() {
                expect($this->_command->is('test'))->toBeA('boolean');
            });
            it("is false", function() {
                expect($this->_command->is())->toBe(false);
            });
            it("is false", function() {
                expect($this->_command->is('test'))->toBe(false);
            });
        });
    });
});
