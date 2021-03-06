import Media from 'blender-media';
import Vue from 'vue';
import { props, queryAll } from 'spatie-dom';

export default function init() {
    queryAll('blender-media').forEach(el => mountMedia(el));
}

export function mountMedia(el) {
    new Vue({
        el,
        render(createElement) {
            return createElement(Media, { props: props(el) });
        },
    });
}