<?php
$page_title = "My Chats | Nobility ";
$description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

include('partials/head.php');
?>

<body>

    <?php
    include('partials/sidebar.php');
    ?>

    <div id="main-wrapper">

        <?php
        include('partials/header.php');
        ?>

        <div id="page-content" class="dashboardPage chatsPage vendorChatsPage">
            <div class="dashboard-wrap">

                <div id="chats-page" class="prof-section ch-page">

                    <!-- Page Header -->
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h2 class="prof-heading mb-0">My Chats</h2>
                        <button class="btn btn-small btn-primary" id="createNewChatBtn">
                            <i class="bi bi-plus"></i> Create New Chat
                        </button>
                    </div>

                    <!-- ── RECENT CHATS LABEL ── -->
                    <div class="ch-recent-label">
                        <button class="ch-recent-toggle" id="recentToggle">
                            Recent Chats <i class="bi bi-chevron-down"></i>
                        </button>
                    </div>

                    <!-- ── CHAT OUTER WRAP ── -->
                    <div class="ch-wrap">

                        <!-- ── LEFT: Contact Sidebar ── -->
                        <div class="ch-sidebar">

                            <!-- Search + Messages row -->
                            <div class="ch-search-bar-row">
                                <div class="ch-search-box">
                                    <i class="bi bi-search ch-si"></i>
                                    <input type="text" class="ch-search-input" id="chSearch" placeholder="Search" />
                                </div>
                                <button class="ch-msg-btn" id="chMsgBtn">Messages <i class="bi bi-chevron-down"></i></button>
                            </div>

                            <!-- Scrollable contact list -->
                            <div class="ch-contact-scroll" id="chContactList"></div>
                        </div>

                        <!-- ── RIGHT: Chat Window ── -->
                        <div class="ch-window">

                            <!-- Chat Header -->
                            <div class="ch-win-hdr" id="chWinHdr"></div>

                            <!-- Messages scroll -->
                            <div class="ch-msgs" id="chMsgs"></div>

                            <!-- Toolbar (left icons) + Input row -->
                            <div class="ch-input-wrap">
                                <div class="ch-toolbar">
                                    <button class="ch-tool" id="chToolGrid" title="Templates"><i class="bi bi-grid-1x2"></i></button>
                                    <button class="ch-tool" id="chToolImg" title="Image"><i class="bi bi-image"></i></button>
                                    <button class="ch-tool" id="chToolFile" title="File"><i class="bi bi-file-earmark"></i></button>
                                    <input type="file" id="chFileInput" multiple style="display:none" />
                                </div>
                                <div class="ch-input-row">
                                    <button class="ch-plus-btn"><i class="bi bi-plus"></i></button>
                                    <input type="text" class="ch-msg-input" id="chMsgInput" placeholder="Type a message here" />
                                    <button class="ch-emoji-btn" id="chEmojiBtnToggle"><i class="bi bi-emoji-smile"></i></button>
                                    <button class="ch-send-btn" id="chSendBtn"><i class="bi bi-send-fill"></i></button>
                                </div>

                                <!-- Emoji picker -->
                                <div class="ch-emoji-picker" id="chEmojiPicker" style="display:none">
                                    <span>😊</span><span>😂</span><span>❤️</span><span>👍</span><span>🔥</span>
                                    <span>✅</span><span>🎉</span><span>😎</span><span>🙌</span><span>💯</span>
                                    <span>😢</span><span>🤔</span><span>😍</span><span>🥰</span><span>😅</span>
                                    <span>👋</span><span>🙏</span><span>💪</span><span>🤝</span><span>😃</span>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>

    <?php
    include('partials/scripts.php');
    ?>

    <script>
    $(function() {
        /* ════ CONTACTS ════ */
        var contacts = [{
                id: 1,
                name: 'Luy Robin',
                av: 'https://i.pravatar.cc/80?img=32',
                sub: 'writes',
                subType: 'writing',
                online: true,
                time: '1 minute ago',
                badge: 2,
                preview: 'Most of its text is made up from sections 1.10.32–3 of Cicero\'s De finibus Bonorum et malorum.',
                tags: []
            },
            {
                id: 2,
                name: 'Jared Sunn',
                av: 'https://i.pravatar.cc/80?img=11',
                sub: 'records voice message',
                subType: 'recording',
                online: true,
                time: '1 minute ago',
                badge: 1,
                preview: 'Voice message (01:15)',
                tags: [{ l: 'Files (x2)', c: 'blue', i: 'bi-file-earmark' }, { l: 'Photo', c: 'pink', i: 'bi-image' }]
            },
            {
                id: 3,
                name: 'Nika Jerrardo',
                av: 'https://i.pravatar.cc/80?img=5',
                sub: 'last online 5 hours ago',
                subType: 'last',
                online: false,
                time: '3 days ago',
                badge: 0,
                preview: 'Cicero famously orated against his political opponent Lucius Sergius Catilina.',
                tags: []
            },
            {
                id: 4,
                name: 'David Amrosa',
                av: 'https://i.pravatar.cc/80?img=17',
                sub: 'last online 5 hours ago',
                subType: 'last',
                online: false,
                time: '3 days ago',
                badge: 0,
                preview: 'Cicero famously orated against his political opponent Lucius Sergius Catilina.',
                tags: [{ l: 'Video (x3)', c: 'green', i: 'bi-camera-video' }]
            },
            {
                id: 5,
                name: 'Luy Robin',
                av: 'https://i.pravatar.cc/80?img=32',
                sub: 'writes',
                subType: 'writing',
                online: true,
                time: '1 minute ago',
                badge: 0,
                preview: 'Sure! I will send it now...',
                tags: []
            }
        ];

        /* ════ MESSAGE HISTORY ════ */
        var history = {
            3: [{
                    t: 'date',
                    d: 'Yesterday'
                },
                { f: 'them', txt: 'Hello! Finally found the time to write to you) I need your help in creating interactive animations for my mobile application.' },
                { f: 'them', txt: 'Can I send you files?' },
                { f: 'me', txt: 'Hey! Okay, send out.' },
                { f: 'them', file: { n: 'Style.zip', s: '41.36 Mb', ic: 'bi-file-earmark-zip-fill' } },
                { t: 'date', d: 'Today' },
                { f: 'me', txt: 'Hello! I tweaked everything you asked. I am sending the finished file.', flink: { n: '(52.05 Mb) NEW_Style.zip', ic: 'bi-file-earmark-zip' } },
                { f: 'them', txt: 'Awesome! thank you so much 🙌' }
            ]
        };

        var activeId = 3;

        /* ════ RENDER CONTACTS ════ */
        function renderContacts(q) {
            var h = '';
            contacts.forEach(function(c) {
                if (q && !c.name.toLowerCase().includes(q.toLowerCase())) return;
                var isAct = c.id === activeId;
                var subHtml = '';
                if (c.subType === 'writing') subHtml = '<div class="ch-c-sub"><i class="bi bi-three-dots"></i> writes</div>';
                else if (c.subType === 'recording') subHtml = '<div class="ch-c-sub"><i class="bi bi-circle-fill" style="font-size:.45rem"></i> records voice message</div>';
                else subHtml = '<div class="ch-c-sub" style="color:' + (isAct ? 'rgba(255,255,255,.8)' : '#e91e8c') + '">' + escapeHtml(c.sub) + '</div>';
                
                var tagsH = '';
                if (c.tags.length) {
                    tagsH = '<div class="ch-tags-row">';
                    c.tags.forEach(function(t) {
                        tagsH += '<span class="ch-tag ' + t.c + '"><i class="bi ' + t.i + '"></i> ' + t.l + '</span>';
                    });
                    tagsH += '</div>';
                }
                var badgeH = c.badge ? '<div class="ch-badge">' + c.badge + '</div>' : '';
                var dotH = c.online ? '<span class="ch-online-dot"></span>' : '';
                h += '<div class="ch-card' + (isAct ? ' active' : '') + '" data-id="' + c.id + '">' +
                    badgeH +
                    '<div class="ch-c-top">' +
                    '<div class="ch-av-wrap"><img src="' + c.av + '" class="ch-av" alt=""/>' + dotH + '</div>' +
                    '<div class="ch-c-body">' +
                    '<div class="ch-c-namerow"><span class="ch-c-name">' + escapeHtml(c.name) + '</span><span class="ch-c-time">' + escapeHtml(c.time) + '</span></div>' +
                    subHtml +
                    '<div class="ch-c-preview">' + escapeHtml(c.preview) + '</div>' +
                    '</div>' +
                    '</div>' +
                    tagsH +
                    '</div>';
            });
            $('#chContactList').html(h || '<div class="p-3 text-center" style="color:#8a90a2;font-size:.84rem">No chats found</div>');
        }

        function renderWindow() {
            var c = contacts.find(x => x.id === activeId);
            if (!c) {
                $('#chWinHdr').html('');
                $('#chMsgs').html('<div style="display:flex;flex:1;align-items:center;justify-content:center;flex-direction:column;color:#8a90a2;padding:40px;text-align:center"><i class="bi bi-chat-dots" style="font-size:2.8rem;color:#f0d0e8;margin-bottom:12px"></i><p>Select a conversation</p></div>');
                return;
            }
            $('#chWinHdr').html(
                '<img src="' + c.av + '" class="ch-win-av" alt=""/>' +
                '<div>' +
                '<div class="ch-win-name">' + escapeHtml(c.name) + '</div>' +
                '<div class="ch-win-sub">last online 5 hours ago</div>' +
                '</div>' +
                '<div class="ch-win-acts">' +
                '<button class="ch-win-act" title="Attach"><i class="bi bi-paperclip"></i></button>' +
                '<button class="ch-win-act" title="More"><i class="bi bi-three-dots-vertical"></i></button>' +
                '</div>'
            );
            var msgs = history[activeId] || [{ t: 'date', d: 'Today' }, { f: 'them', txt: 'Hi! Start the conversation.' }];
            var h = '';
            msgs.forEach(function(m) {
                if (m.t === 'date') {
                    h += '<div class="ch-date-sep"><span class="ch-date-text">' + (m.d) + '</span></div>';
                    return;
                }
                var isMe = m.f === 'me';
                h += '<div class="ch-msg-grp' + (isMe ? ' mine' : '') + '">';
                h += '<div class="chatWrapper">';
                if (!isMe) h += '<img src="' + c.av + '" class="ch-msg-av" alt=""/>';
                h += '<div class="ch-bubbles-col">';
                if (m.txt) {
                    h += '<div class="ch-bubble-wrap">' +
                        (isMe ? '' : '<button class="ch-bubble-dots"><i class="bi bi-three-dots"></i></button>') +
                        '<div class="ch-bubble">' + escapeHtml(m.txt) + '</div>' +
                        (isMe ? '<button class="ch-bubble-dots"><i class="bi bi-three-dots"></i></button>' : '') +
                        '</div>';
                }
                if (m.file) {
                    h += '<div class="ch-bubble-wrap">' +
                        '<button class="ch-bubble-dots"><i class="bi bi-three-dots"></i></button>' +
                        '<div class="ch-file-bubble">' +
                        '<i class="bi ' + m.file.ic + ' ch-file-icon"></i>' +
                        '<div class="ch-file-info"><div class="fn">' + escapeHtml(m.file.n) + '</div><div class="fs">' + escapeHtml(m.file.s) + '</div></div>' +
                        '</div></div>';
                }
                if (m.flink) {
                    h += '<a href="#" class="ch-file-link"><span>' + escapeHtml(m.flink.n) + '</span><i class="bi ' + m.flink.ic + '"></i></a>';
                }
                h += '</div></div>';
                h += '<div class="ch-meta">' + (isMe ? '<i class="bi bi-check2-all" style="color:#22c55e;font-size:.72rem"></i>' : '') + '<span>' + (isMe ? '11:30 AM' : '7:45 PM') + '</span></div>';
                h += '</div>';
            });
            $('#chMsgs').html(h);
            $('#chMsgs').scrollTop($('#chMsgs')[0].scrollHeight);
        }

        function send(txt, fileObj) {
            var hist = history[activeId];
            if (!hist) { history[activeId] = []; hist = history[activeId]; }
            if (txt && $.trim(txt)) {
                hist.push({ f: 'me', txt: $.trim(txt) });
                var c = contacts.find(x => x.id === activeId);
                if (c) { c.preview = $.trim(txt); c.time = 'just now'; }
            }
            if (fileObj) {
                var ic = fileObj.name.match(/\.(zip|rar|7z)$/i) ? 'bi-file-earmark-zip-fill' :
                    fileObj.name.match(/\.(jpg|png|gif|webp)$/i) ? 'bi-file-earmark-image' : 'bi-file-earmark-fill';
                hist.push({ f: 'me', file: { n: fileObj.name, s: (fileObj.size / 1048576).toFixed(2) + ' Mb', ic: ic } });
            }
            renderWindow();
            renderContacts($('#chSearch').val());
        }

        function escapeHtml(str) { return $('<div>').text(str || '').html(); }

        /* EVENTS */
        $(document).on('click', '.ch-card', function() {
            activeId = parseInt($(this).data('id'));
            renderContacts($('#chSearch').val());
            renderWindow();
        });
        $('#chSendBtn').on('click', function() { var v = $('#chMsgInput').val(); send(v); $('#chMsgInput').val(''); });
        $('#chMsgInput').on('keydown', function(e) { if (e.key === 'Enter' && !e.shiftKey) { e.preventDefault(); send($(this).val()); $(this).val(''); } });
        $('#chToolImg, #chToolFile').on('click', function() { $('#chFileInput').trigger('click'); });
        $('#chFileInput').on('change', function() { Array.from(this.files).forEach(f => send('', f)); $(this).val(''); });
        $('#chEmojiBtnToggle').on('click', function(e) { e.stopPropagation(); $('#chEmojiPicker').toggle(); });
        $(document).on('click', '.ch-emoji-picker span', function() {
            var emoji = $(this).text();
            var $i = $('#chMsgInput'), p = $i[0].selectionStart || $i.val().length, v = $i.val();
            $i.val(v.slice(0, p) + emoji + v.slice(p)).focus();
            $('#chEmojiPicker').hide();
        });
        $(document).on('click', function(e) { if (!$(e.target).closest('#chEmojiBtnToggle,#chEmojiPicker').length) $('#chEmojiPicker').hide(); });
        $('#chSearch').on('input', function() { renderContacts($(this).val()); });
        $('#createNewChatBtn').on('click', function() {
            var n = prompt('Enter contact name:');
            if (!n || !$.trim(n)) return;
            var newId = Date.now();
            contacts.unshift({ id: newId, name: $.trim(n), av: 'https://i.pravatar.cc/80?img=' + Math.floor(Math.random() * 70 + 1), sub: 'New contact', subType: 'last', online: false, time: 'just now', badge: 0, preview: 'Say hello!', tags: [] });
            activeId = newId;
            renderContacts('');
            renderWindow();
        });

        /* ═══════════════════════════════════════════════════════════════════
        *  ON CLICK .ch-plus-btn → TOOLBAR SLIDES UP & BECOMES VISIBLE
        *  (toggle class "show" on .ch-toolbar -> smooth slide-up animation)
        ═══════════════════════════════════════════════════════════════════ */
        $('.ch-plus-btn').on('click', function(e) {
            e.stopPropagation();
            const $toolbar = $('.ch-toolbar');
            // toggle visibility: if hidden -> slide up (visible), if visible -> slide down (hide)
            $toolbar.toggleClass('show');
            // optional: slight rotation on plus icon (just subtle UX)
            $(this).find('i').css('transform', $toolbar.hasClass('show') ? 'rotate(45deg)' : 'rotate(0deg)');
        });
        // ensure toolbar starts hidden on page load (just safety)
        $('.ch-toolbar').removeClass('show');
        
        renderContacts('');
        renderWindow();
    });
</script>

</body>

</html>