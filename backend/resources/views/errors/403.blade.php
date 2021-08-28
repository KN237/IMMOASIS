@extends('errors::minimal')

@section('title', __('Forbidden'))
@section('un', '4')
@section('deux', '0')
@section('trois', '3')
@section('message', __($exception->getMessage() ?: 'Forbidden'))
