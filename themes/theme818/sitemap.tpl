{*
* 2007-2013 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2013 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

{capture name=path}{l s='Sitemap'}{/capture}
{include file="$tpl_dir./breadcrumb.tpl"}

<h1><span>{l s='Sitemap'}</span></h1>
<div id="sitemap_content" class="row">
	<div class="sitemap_block titled_box col-xs-12 col-sm-4">
		<h2><span>{l s='Our offers'}</span></h2>
		<ul class="content_list">
			<li><a href="{$link->getPageLink('new-products')|escape:'html'}" title="{l s='View a new product'}"><i class="icon-caret-right"></i> {l s='New products'}</a></li>
			{if !$PS_CATALOG_MODE}
			<li><a href="{$link->getPageLink('best-sales')|escape:'html'}" title="{l s='View top-selling products'}"><i class="icon-caret-right"></i> {l s='Best sellers'}</a></li>
			<li><a href="{$link->getPageLink('prices-drop')|escape:'html'}" title="{l s='View products with a price drop'}"><i class="icon-caret-right"></i> {l s='Price drop'}</a></li>
			{/if}
			{if $display_manufacturer_link OR $PS_DISPLAY_SUPPLIERS}<li><a href="{$link->getPageLink('manufacturer')|escape:'html'}" title="{l s='View a list of manufacturers'}"><i class="icon-caret-right"></i> {l s='Manufacturers:'}</a></li>{/if}
			{if $display_supplier_link OR $PS_DISPLAY_SUPPLIERS}<li><a href="{$link->getPageLink('supplier')|escape:'html'}" title="{l s='View a list of suppliers'}"><i class="icon-caret-right"></i> {l s='Suppliers:'}</a></li>{/if}
		</ul>
	</div>
	<div class="sitemap_block titled_box col-xs-12 col-sm-4">
		<h2><span>{l s='Your Account'}</span></h2>
		<ul class="content_list">
		{if $logged}
			<li><a href="{$link->getPageLink('my-account', true)|escape:'html'}" title="{l s='Manage your customer account'}" rel="nofollow"><i class="icon-caret-right"></i> {l s='Your Account'}</a></li>
			<li><a href="{$link->getPageLink('identity', true)|escape:'html'}" title="{l s='Manage your personal information'}" rel="nofollow"><i class="icon-caret-right"></i> {l s='Personal information'}</a></li>
			<li><a href="{$link->getPageLink('addresses', true)|escape:'html'}" title="{l s='View a list of my addresses'}" rel="nofollow"><i class="icon-caret-right"></i> {l s='Addresses'}</a></li>
			{if $voucherAllowed}<li><a href="{$link->getPageLink('discount', true)|escape:'html'}" title="{l s='View a list of my discounts'}" rel="nofollow"><i class="icon-caret-right"></i> {l s='Discounts'}</a></li>{/if}
			<li><a href="{$link->getPageLink('history', true)|escape:'html'}" title="{l s='View a list of my orders'}" rel="nofollow"><i class="icon-caret-right"></i> {l s='Order history'}</a></li>
		{else}
			<li><a href="{$link->getPageLink('authentication', true)|escape:'html'}" title="{l s='Authentication'}" rel="nofollow"><i class="icon-caret-right"></i> {l s='Authentication'}</a></li>
			<li><a href="{$link->getPageLink('authentication', true)|escape:'html'}" title="{l s='Create new account'}" rel="nofollow"><i class="icon-caret-right"></i> {l s='Create new account'}</a></li>
		{/if}
		{if $logged}
			<li><a href="{$link->getPageLink('index')}?mylogout" title="{l s='Log out'}" rel="nofollow"><i class="icon-caret-right"></i> {l s='Log out'}</a></li>
		{/if}
		</ul>
	</div>
	<div class="sitemap_block titled_box col-xs-12 col-sm-4">
			<h2><span>{l s='Pages'}</span></h2>
				<ul class="content_list">
                    <li><a href="{$categoriescmsTree.link}" title="{$categoriescmsTree.name|escape:'htmlall':'UTF-8'}"><i class="icon-caret-right"></i> {$categoriescmsTree.name|escape:'htmlall':'UTF-8'}</a></li>
                        {if isset($categoriescmsTree.children)}
                            {foreach $categoriescmsTree.children as $child}
                                {if (isset($child.children) && $child.children|@count > 0) || $child.cms|@count > 0}
                                    {include file="$tpl_dir./category-cms-tree-branch.tpl" node=$child}
                                {/if}
                            {/foreach}
                        {/if}
                        {foreach from=$categoriescmsTree.cms item=cms name=cmsTree}
                            <li><a href="{$cms.link|escape:'htmlall':'UTF-8'}" title="{$cms.meta_title|escape:'htmlall':'UTF-8'}"><i class="icon-caret-right"></i> {$cms.meta_title|escape:'htmlall':'UTF-8'}</a></li>
                        {/foreach}
                        <li {if !$display_store} class="last"{/if}><a href="{$link->getPageLink('contact', true)|escape:'html'}" title="{l s='Contact'}"><i class="icon-caret-right"></i> {l s='Contact'}</a></li>
                        {if $display_store}<li class="last"><a  href="{$link->getPageLink('stores')}" title="{l s='List of our stores'}"><i class="icon-caret-right"></i> {l s='Our stores'}</a></li>{/if}
				</ul>
	</div>
</div>
<div id="listpage_content">
	<div class="categTree titled_box">
		<h2><span>{l s='Categories'}</span></h2>
		<div class="tree_top"><a href="{$base_dir_ssl}" title="{$categoriesTree.name|escape:'htmlall':'UTF-8'}">{$categoriesTree.name|escape:'htmlall':'UTF-8'}</a></div>
		<ul class="tree">
		{if isset($categoriesTree.children)}
			{foreach $categoriesTree.children as $child}
				{if $child@last}
					{include file="$tpl_dir./category-tree-branch.tpl" node=$child last='true'}
				{else}
					{include file="$tpl_dir./category-tree-branch.tpl" node=$child}
				{/if}
			{/foreach}
		{/if}
		</ul>
	</div>

</div>
