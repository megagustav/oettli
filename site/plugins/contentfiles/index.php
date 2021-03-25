<?php

Kirby::plugin('oettli/contentfiles', [
		'options' => [
				'extenions' => [
						'mp4'
				]
		],
		'components' => [
				'file::url' => function (Kirby $kirby, $file)
				{
						$page = $file->parent();

						if (in_array($file->extension(), option('oettli.contentfiles.extenions')))
						{
								return $kirby->url() . '/content/' . $page->diruri() . '/' . $file->filename();
						}
						else
						{
								return $file->mediaurl();
						}
				}
		]
]);