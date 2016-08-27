'use strict';

module.exports = function (grunt) {
    require('time-grunt')(grunt);

    require('load-grunt-config')(grunt, {
        jitGrunt: {
            staticMappings: {
                rig: 'grunt-rigger',
                sprite: 'grunt-spritesmith'
            }
        },
        config: {
            connect: {
                port: '8081'
            },
            path: {
                development: 'sources',
                production: '../frontend/web/theme',
                productionYiiView: '../stage/app/views/layouts/partials/',
                http: '/build',
                temp: '.tmp/theme',
                indexTemp: '.tmp',
                cache: '.cache-frontend'
            },
            folder: {
                scripts: 'js',
                styles_drafts: 'css-unprefixed',
                styles: 'css',
                less: 'less',
                fonts: 'fonts',
                images: 'img',
                pictures: 'picture',
                components: 'components',
                templates: 'templates',
                swf: 'swf',
                video: 'video',
                audio: 'audio'
            },
            meta: {
                header: '/* Copyright 2016, INDEE Interactive */\n',
                footer: '\n/* End of source */'
            }
        }
    });
};
