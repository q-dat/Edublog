(function (blocks, editor, element) {
    let createElement = element.createElement,
        SelectControl = wp.components.SelectControl,
        Placeholder = wp.components.Placeholder,
        el = wp.element.createElement,
        Fragment = wp.element.Fragment;
    if (tsvg_block_data.tsvg_records_count >= 1) {
        var tsvg_records_list = tsvg_block_data.tsvg_records_list
        blocks.registerBlockType('tsvideogallery/gallery-block', {
            title: 'TS Gallery',
            icon: 'format-video',
            category: 'widgets',
            description: 'Gallery is a user-friendly plugin to display user or hashtag-based gallery feeds as a responsive customizable gallery.',
            keywords: ['gallery', 'video gallery', 'video', 'mp4', 'youTube', 'vimeo', 'wistia'],
            example: {
                attributes: {
                    'preview': true,
                },
            },
            edit: props => {
                if (props.attributes.tsvg_id) {
                    return [
                        createElement(
                            SelectControl, {
                            className: 'tsvg-select-block',
                            value: props.attributes.tsvg_id,
                            options: tsvg_records_list,
                            onChange: function (newValue) {
                                if (parseInt(newValue) > 0) {
                                    props.setAttributes({ tsvg_id: newValue });
                                    createElement(wp.serverSideRender, {
                                        key: 'tsvg-control',
                                        block: 'tsvideogallery/gallery-block',
                                        className: 'tsvg-guttenberg-block',
                                        attributes: props.attributes,
                                    });
                                } else {
                                    props.setAttributes({ tsvg_id: '' });
                                }
                            }
                        }
                        ),
                        createElement(wp.serverSideRender, {
                            key: 'tsvg-control',
                            block: 'tsvideogallery/gallery-block',
                            className: 'tsvg-guttenberg-block',
                            attributes: props.attributes,
                        })
                    ]
                } else if (props.attributes.preview) {
                    return [
                        createElement(
                            Fragment, {
                            key: "tsvg-preview-control",
                            className: "tsvg-preview-control",
                        },
                            el(
                                'img', {
                                src: tsvg_block_data.ts_video_gallery_preview,
                                style: {
                                    width: '100%',
                                    height: '100%'
                                }
                            },
                            ),
                        ),
                    ]
                } else {
                    return [
                        createElement(
                            Placeholder, {
                            key: "tsvg-selector-block",
                            className: "tsvg-selector-block",
                        },
                            el(
                                'img', {
                                width: 100,
                                height: 100,
                                src: tsvg_block_data.ts_video_gallery_logo
                            },
                            ),
                            el(
                                'h3', {
                                key: "tsvg-h3",
                                className: "tsvg-h3",
                            },
                                'TS Video Gallery'
                            ),
                            createElement(
                                SelectControl, {
                                className: 'tsvg-select-block',
                                value: props.attributes.tsvg_id,
                                options: tsvg_records_list,
                                onChange: function (newValue) {
                                    if (parseInt(newValue) > 0) {
                                        props.setAttributes({ tsvg_id: newValue });
                                        createElement(wp.serverSideRender, {
                                            key: 'tsvg-control',
                                            block: 'tsvideogallery/gallery-block',
                                            className: 'tsvg-guttenberg-block',
                                            attributes: props.attributes,
                                        })
                                    } else {
                                        props.setAttributes({ tsvg_id: '' });
                                    }
                                }
                            }
                            ),
                        ),
                    ]
                }
            },
            save: props => {
                return null;
            },
        })
    } else {
        return null;
    }
}(
    window.wp.blocks,
    window.wp.editor,
    window.wp.element
))