import 'viewerjs/dist/viewer.css';
import Viewer from 'v-viewer';

Nova.booting((Vue, router) => {
    Vue.use(Viewer);
    Vue.component('index-array-images', require('./components/IndexField'));
    Vue.component('detail-array-images', require('./components/DetailField'));
    Vue.component('form-array-images', require('./components/FormField'));
})
