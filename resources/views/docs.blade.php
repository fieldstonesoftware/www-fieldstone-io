@extends('partials.layout')

@section('content')
    <div class="sidebar_layout" id="docsScreen">

        <div class="page_contain">
            <div class="contain">
                <aside class="sidebar">
                    <a href="/" class="logo">
                        <img class="mark" src="/img/logomark.min.svg" alt="Fieldstone" style="min-width:3em;">
                        <img class="type" src="/img/logotype.min.svg" alt="Fieldstone" style="min-width:10em;">
                    </a>
                    <nav>
                        <div class="navigation_contain">
                            <div class="docs_sidebar">
                                {!! $index !!}
                            </div>
                        </div>
                    </nav>
                    <div class="trigger_contain">
                        <a href="#" class="nav_trigger" aria-label="Menu">
                            <div class="bar"></div>
                        </a>
                    </div>
                </aside>

                <section class="body_content">
                    <header class="docs_actions">
                        <div class="search_contain" style="display:none;">
                            <div class="input_group search icon">
                                <input type="text" class="search_input" id="search-docs-input" placeholder="Search Docs" aria-label="Search the documentation">
                                <input type="submit" class="search_submit icon_display">
                            </div>
                        </div>
                    </header>
                    <section class="docs_body">
                        <section class="docs_main">
                            @unless (in_array($currentVersion, [DEFAULT_VERSION, '2.x']))
                                <blockquote>
                                    <div class="callout">
                                        <div class="icon orange">
                                            <img src="{{ asset('/img/callouts/exclamation.min.svg') }}" alt="Icon"/>
                                        </div>

                                        <p class="content">
                                            <strong>WARNING</strong> You're browsing the documentation for an old version of Fieldstone.
                                            Please contact us if you arrived here from an outside link. The current documentation is
                                            here: <a href="{{ route('docs.version', DEFAULT_VERSION) }}">Fieldstone {{ DEFAULT_VERSION }}</a>.
                                        </p>
                                    </div>
                                </blockquote>
                            @endunless

                            {!! $content !!}
                        </section>
                    </section>
                </section>
            </div>
        </div>

    </div>
@stop
