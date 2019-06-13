@extends('errors.minimal')

@section('code', 'SE.123-105')
@section('title', __('Security Exception'))

@section('message', __('You are not allowed to access this route outside of the internal network.'))
