<?php

it('can test', function () {
    expect(true)->toBeTrue();
});

it('can fail', function(){
    can(false)->toBeTrue();
});
