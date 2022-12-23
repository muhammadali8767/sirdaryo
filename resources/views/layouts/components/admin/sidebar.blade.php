<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('homeAdmin') }}" class="brand-link ">
        <img src="/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">IT Live</span> <br>
        <span class="brand-text font-weight-light text-end"> +99897 866-50-50</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{ route('users.show', Auth::user()) }}" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div> --}}

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="{{ route('homeAdmin') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Главная</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('contact.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Заявки</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-align-left"></i>
                        <p>Район в цифрах<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('inNumbers.index') }}" class="nav-link">
                                <p>Все район в цифрах</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('inNumbers.create') }}" class="nav-link">
                                <p>Добавить район в цифрах</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-align-left"></i>
                        <p>Категории<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('category.index') }}" class="nav-link">
                                <p>Все категории</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('category.create') }}" class="nav-link">
                                <p>Добавить категорию</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-pen-alt"></i>
                        <p>Блог<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('post.index') }}" class="nav-link">
                                <p>Все статьи</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('post.create') }}" class="nav-link">
                                <p>Добавить статью</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-icons"></i>
                        <p>Медиа<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('photoList') }}" class="nav-link">
                                <p>Все фотографии</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('videoList') }}" class="nav-link">
                                <p>Все видео</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('medias.create') }}" class="nav-link">
                                <p>Добавить медиа</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>Страницы<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('pages.index') }}" class="nav-link">
                                <p>Все страницы</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pages.create') }}" class="nav-link">
                                <p>Добавить страницу</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>Руководство<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('director.index') }}" class="nav-link">
                                <p>Все руководители</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('director.create') }}" class="nav-link">
                                <p>Добавить руководителя</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>Члены Сената<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('senator.index') }}" class="nav-link">
                                <p>Все члены сената</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('senator.create') }}" class="nav-link">
                                <p>Добавить члена сената</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>Состав депутатов<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('deputat.index') }}" class="nav-link">
                                <p>Все депутаты</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('deputat.create') }}" class="nav-link">
                                <p>Добавить депутат</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>Главы Секретариата<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('headOfSecretariat.index') }}" class="nav-link">
                                <p>Все Главы Секретариата</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('headOfSecretariat.create') }}" class="nav-link">
                                <p>Добавить Главы Секретариата</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>Порядок приема граждан<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('reception.index') }}" class="nav-link">
                                <p>Все порядок приема граждан</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('reception.create') }}" class="nav-link">
                                <p>Добавить порядок приема граждан</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>Открытая информация<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('opendatas.index') }}" class="nav-link">
                                <p>Все открытая информация</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('opendatas.create') }}" class="nav-link">
                                <p>Добавить открытую информацию</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>Решение мэра<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('decree.index') }}" class="nav-link">
                                <p>Все решение мэра</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('decree.create') }}" class="nav-link">
                                <p>Добавить решение мэра</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Ползователи<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('users.index') }}" class="nav-link">
                                <p>Все ползователи</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('users.create') }}" class="nav-link">
                                <p>Добавить ползователя</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
