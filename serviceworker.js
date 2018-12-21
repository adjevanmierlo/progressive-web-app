const cacheName = 'v1';

const cacheAssets = [
'index.html',
'php/pagina2.php',
'php/db_connection.php',
'fonts/school.ttf',
'css/index.css',
'css/pagina2.css'
];




// call install event

self.addEventListener('install', e => {
    console.log('Service Worker: Installed');

    e.waitUntil(
        caches
        .open(cacheName)
        .then(cache => {
            console.log('Service Worker: Caching Files');
            cache.addAll(cacheAssets);
        })
        .then(() => self.skipWaiting())
    );
});

// call activate event

self.addEventListener('activate', e => {
            console.log('Service Worker: Activated');

            //remove unwanted caches

            e.waitUntil(
                caches.keys().then(cacheNames => {
                    return Promise.all(
                        cacheNames.map(cache => {
                            if (cache !== cacheName) {
                                console.log('Servic Worker: Clearing Old Cache');
                                return caches.delete(cache);
                            }
                        })
                    );
                })
            );
            });

// Call Fetch Event

self.addEventListener('fetch', e => {
    console.log('Service Worker: Fetching');
    e.respondWith(fetch(e.request).catch(() => caches.match(e.request)));
});


