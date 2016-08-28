<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="utf-8">
        <title>CMS UI</title>
        <link rel="stylesheet" href="/css/cms-styles.css">
    </head>
    <body>
        <div class="main-wrap">
            <aside class="left-rail">
                <nav class="nav">
                    <a class="home-link" href="/cms/">
                        <span class="home-link_logo">Logo</span>
                        <div class="home-link_tagline">Content Editor</div>
                    </a>
                    <ul class="nav-list">
                        <li class="nav-list_item"><a href="/cms/pages"  class="nav-list_link nav-list_link--active"><span class="nav-list_link-icon"></span>Pages</a></li>
                        <li class="nav-list_item"><a href="/cms/news"   class="nav-list_link"                      ><span class="nav-list_link-icon"></span>News</a></li>
                        <li class="nav-list_item"><a href="/cms/events" class="nav-list_link"                      ><span class="nav-list_link-icon"></span>Events</a></li>
                        <li class="nav-list_item"><a href="/cms/people" class="nav-list_link"                      ><span class="nav-list_link-icon"></span>People</a></li>
                        <li class="nav-list_item"><a href="/cms/images" class="nav-list_link"                      ><span class="nav-list_link-icon"></span>Images</a></li>
                    </ul>
                </nav>
            </aside>
            <main class="main">
                <header class="pg-header">
                    <h1 class="pg-heading">Page Editor</h1>
                    <div class="pg-heading_secondary">
                        <div class="pg-sub-heading">Page Name</div>
                        <button class="plain-text breadcrumbs">/breadcrumbs/are/listed/here/</button>
                    </div>
                    <form class="page-status-form" action="/cms/page/updatePageState/" method="post">
                        <input type="hidden" name="page-id" value="PAGE_ID_HERE">

                        <div class="ui-switch ui-switch--promptt" data-page-current-state="live">
                            <legend class="ui-switch_caption">Page status:</legend>
                            <div class="ui-switch_labels ui-switch_labels--page-status">
                                <div class="ui-switch_input-wrap">
                                    <input type="radio" class="ui-switch_radio" name="page-state" id="page-state--live"      value="live" checked>
                                    <input type="radio" class="ui-switch_radio" name="page-state" id="page-state--draft"     value="draft">
                                    <input type="radio" class="ui-switch_radio" name="page-state" id="page-state--scheduled" value="scheduled">

                                    <label class="btn ui-switch_label" for="page-state--live">Live</label>
                                    <label class="btn ui-switch_label" for="page-state--draft">Draft</label>
                                    <label class="btn ui-switch_label" for="page-state--scheduled">Scheduled</label>
                                </div>
                                <div class="ui-switch_prompt">
                                    <div class="ui-switch_prompt-title">Change page status?</div>
                                    <div class="ui-switch_prompt-options">
                                        <button class="ui-switch_prompt-option btn--confirm">Now</button>
                                        <button class="ui-switch_prompt-option btn--yield">Later</button>
                                        <button class="ui-switch_prompt-option btn--cancel">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </header>
            </main>
        </div>
        <script src="/js/cms/min/scripts-cms-min.js"></script>
    </body>
</html>
