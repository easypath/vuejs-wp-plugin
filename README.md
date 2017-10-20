# vuejs-wp-plugin

A skeletion for creating a [Vue.js](https://vuejs.org/)-powered WordPress plugin.

## Installlation:
- Initialize a new Vue project using vue-cli:
`vue init webpack <project_name>`

- Merge the contents of this repo (except for ".gitignore") into the new Vue project, overwriting all files when prompted

- Optional: uncomment the Foundation 6 resources in index.html. Note that this is for development use only, these files will not be injected into the built project files.

- Rename the vuejs-wp-plugin.php file to match the name of the project; also update the WordPress plugin headers inside the file

- Build the project for production

- Activate the plugin in WordPress

- When shipping the plugin, delete the node_modules and src folders


## Notes
- Appending hashes to filenames for production assets has been removed, otherwise filenames need to be manually updated after every build in order to enqueue by WordPress plugin
- To change the port when running the dev server:
`export PORT=<port> | npm run dev`


## Build Setup
``` bash
# install dependencies
npm install

# serve with hot reload at localhost:8080
npm run dev

# build for production with minification
npm run build

# lint all *.js and *.vue files
npm run lint

# run unit tests
npm test
```

For more information see the [docs for vueify](https://github.com/vuejs/vueify).
