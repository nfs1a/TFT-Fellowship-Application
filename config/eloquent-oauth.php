<?php

return [
	'table' => 'oauth_identities',
	'providers' => [
		'facebook' => [
			'client_id' => '948077125272735',
			'client_secret' => 'c2047642387927b2d4d853224f81a1bc',
			'redirect_uri' => 'http://ec2-52-27-85-178.us-west-2.compute.amazonaws.com/facebook/login',
			'scope' => [],
		],
		'google' => [
			'client_id' => '12345678',
			'client_secret' => 'y0ur53cr374ppk3y',
			'redirect_uri' => 'https://example.com/your/google/redirect',
			'scope' => [],
		],
		'github' => [
			'client_id' => '6147ab3fa04a251ba43f',
			'client_secret' => '5d2388496a30e40e93d107da17c0266441ad4a2d',
			'redirect_uri' => 'http://localhost:8000/github/login',
			'scope' => [],
		],
		'linkedin' => [
			'client_id' => '12345678',
			'client_secret' => 'y0ur53cr374ppk3y',
			'redirect_uri' => 'https://example.com/your/linkedin/redirect',
			'scope' => [],
		],
		'instagram' => [
			'client_id' => '12345678',
			'client_secret' => 'y0ur53cr374ppk3y',
			'redirect_uri' => 'https://example.com/your/instagram/redirect',
			'scope' => [],
		],
		'soundcloud' => [
			'client_id' => '12345678',
			'client_secret' => 'y0ur53cr374ppk3y',
			'redirect_uri' => 'https://example.com/your/soundcloud/redirect',
			'scope' => [],
		],
	],
];
