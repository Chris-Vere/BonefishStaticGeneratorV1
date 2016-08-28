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

                        <div class="page-state-toggler page-state-toggler--promptt" data-page-current-state="live">
                            <legend class="page-state-toggler_caption">Page status:</legend>
                            <div class="page-state-toggler_labels page-state-toggler_labels--page-status">
                                <div class="page-state-toggler_input-wrap">
                                    <input type="radio" class="page-state-toggler_radio" name="page-state" id="page-state--live"      value="live" checked>
                                    <input type="radio" class="page-state-toggler_radio" name="page-state" id="page-state--draft"     value="draft">
                                    <input type="radio" class="page-state-toggler_radio" name="page-state" id="page-state--scheduled" value="scheduled">

                                    <label class="btn page-state-toggler_label" for="page-state--live">Live</label>
                                    <label class="btn page-state-toggler_label" for="page-state--draft">Draft</label>
                                    <label class="btn page-state-toggler_label" for="page-state--scheduled">Scheduled</label>
                                </div>
                                <div class="page-state-toggler_prompt">
                                    <div class="page-state-toggler_prompt-title">Change page status?</div>
                                    <div class="page-state-toggler_prompt-options">
                                        <button class="page-state-toggler_prompt-option btn--confirm">Now</button>
                                        <button class="page-state-toggler_prompt-option btn--yield">Later</button>
                                        <button class="page-state-toggler_prompt-option btn--cancel">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </header>
            </main>
        </div>
    </body>
</html>
