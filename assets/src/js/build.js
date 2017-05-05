({
    //By default load any module IDs from js/lib
    baseUrl: 'assets/src/js',
    //except, if the module ID starts with "app",
    //load it from the js/app directory. paths
    //config is relative to the baseUrl, and
    //never includes a ".js" extension since
    //the paths config could be for a directory.
    paths: {
        //bootstrap: '../lib/bootstrap-2.0.4.min',
        app: '../../src/js',
        app: '../../src/js/modules',
    },
    name: 'main',
    out: 'main-built.js'
});