module.exports = {
    icon: {
        'src': ['<%= path.development %>/<%= folder.images %>/sprite/icon/*.png'],
        'retinaSrcFilter': ['<%= path.development %>/<%= folder.images %>/sprite/icon/*@2x.png'],
        'dest': '<%= path.development %>/<%= folder.images %>/sprite_icon.png',
        'retinaDest': '<%= path.development %>/<%= folder.images %>/sprite_icon@2x.png',
        'destCss': '<%= path.development %>/<%= folder.less %>/include/sprite_icon.less',
        'imgPath': '/assets/img/sprite_icon.png?' + (new Date().getTime()),
        'retinaImgPath': '/assets/img/sprite_icon@2x.png?' + (new Date().getTime()),
        'padding': 2,
        'cssVarMap': function (sprite) {
            sprite.name = 'pngicon-' + sprite.name;
        }
    }
};