@extends('partials.layout')

@section('content')
    <div id="docsScreen" class="pt-3">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div id="docs-nav" class="sidebar-sticky">
                    @unless (in_array($currentVersion, [DEFAULT_VERSION, '2.x']))
                        <blockquote>
                            <div class="callout">
                                <div class="icon red">
                                    <img src="{{ asset('/img/icons/close.min.svg') }}" alt="Icon"/>
                                </div>

                                <p class="content">
                                    <strong>WARNING</strong> You're browsing the documentation for an old version of Fieldstone.
                                    Please contact us if you arrived here from an outside link. The current documentation is
                                    here: <a href="{{ route('docs.version', DEFAULT_VERSION) }}">Fieldstone {{ DEFAULT_VERSION }}</a>.
                                </p>
                            </div>
                        </blockquote>
                    @endunless
                    {!! $index !!}
                </div>
            </nav>
            <div class="col">
                {!! $content !!}
            </div>
        </div>

    </div>
@stop
