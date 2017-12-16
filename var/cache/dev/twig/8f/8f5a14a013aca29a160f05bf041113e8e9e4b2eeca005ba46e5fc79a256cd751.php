<?php

/* SonataBlockBundle:Block:block_core_rss.html.twig */
class __TwigTemplate_5869875304ef07146d205d2fe1a1d7c3f5cba18da443a072493168ce896bdb4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_block"]) || array_key_exists("sonata_block", $context) ? $context["sonata_block"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_block" does not exist.', 11, $this->getSourceContext()); })()), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_rss.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ad108f295668cb7a3a1625a1b351cfbd919c69ec4533d8298f6eb348af99d8e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad108f295668cb7a3a1625a1b351cfbd919c69ec4533d8298f6eb348af99d8e1->enter($__internal_ad108f295668cb7a3a1625a1b351cfbd919c69ec4533d8298f6eb348af99d8e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_rss.html.twig"));

        $__internal_4969b8710ff00252c82313b76be500b0d839a3e5f3e6c875c545529b9a334705 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4969b8710ff00252c82313b76be500b0d839a3e5f3e6c875c545529b9a334705->enter($__internal_4969b8710ff00252c82313b76be500b0d839a3e5f3e6c875c545529b9a334705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_rss.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad108f295668cb7a3a1625a1b351cfbd919c69ec4533d8298f6eb348af99d8e1->leave($__internal_ad108f295668cb7a3a1625a1b351cfbd919c69ec4533d8298f6eb348af99d8e1_prof);

        
        $__internal_4969b8710ff00252c82313b76be500b0d839a3e5f3e6c875c545529b9a334705->leave($__internal_4969b8710ff00252c82313b76be500b0d839a3e5f3e6c875c545529b9a334705_prof);

    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        $__internal_4d2369e60bf293778dc856e6f784eec2bde04fb25829d78e5c58ccb284b1841e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d2369e60bf293778dc856e6f784eec2bde04fb25829d78e5c58ccb284b1841e->enter($__internal_4d2369e60bf293778dc856e6f784eec2bde04fb25829d78e5c58ccb284b1841e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_31a5a8b991d9c9dc3a6b3b0fcebbbbde0053e8a415204f9427873b60172be6e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31a5a8b991d9c9dc3a6b3b0fcebbbbde0053e8a415204f9427873b60172be6e4->enter($__internal_31a5a8b991d9c9dc3a6b3b0fcebbbbde0053e8a415204f9427873b60172be6e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 14
        echo "    <h3 class=\"sonata-feed-title\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new Twig_Error_Runtime('Variable "settings" does not exist.', 14, $this->getSourceContext()); })()), "title", array()), "html", null, true);
        echo "</h3>

    <div class=\"sonata-feeds-container\">
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["feeds"]) || array_key_exists("feeds", $context) ? $context["feeds"] : (function () { throw new Twig_Error_Runtime('Variable "feeds" does not exist.', 17, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["feed"]) {
            // line 18
            echo "            <div>
                <strong><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["feed"], "link", array()), "html", null, true);
            echo "\" rel=\"nofollow\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["feed"], "title", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["feed"], "title", array()), "html", null, true);
            echo "</a></strong>
                <div>";
            // line 20
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["feed"], "description", array());
            echo "</div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "                No feeds available.
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feed'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </div>
";
        
        $__internal_31a5a8b991d9c9dc3a6b3b0fcebbbbde0053e8a415204f9427873b60172be6e4->leave($__internal_31a5a8b991d9c9dc3a6b3b0fcebbbbde0053e8a415204f9427873b60172be6e4_prof);

        
        $__internal_4d2369e60bf293778dc856e6f784eec2bde04fb25829d78e5c58ccb284b1841e->leave($__internal_4d2369e60bf293778dc856e6f784eec2bde04fb25829d78e5c58ccb284b1841e_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_rss.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 25,  79 => 23,  71 => 20,  63 => 19,  60 => 18,  55 => 17,  48 => 14,  39 => 13,  18 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
{% extends sonata_block.templates.block_base %}

{% block block %}
    <h3 class=\"sonata-feed-title\">{{ settings.title }}</h3>

    <div class=\"sonata-feeds-container\">
        {% for feed in feeds %}
            <div>
                <strong><a href=\"{{ feed.link}}\" rel=\"nofollow\" title=\"{{ feed.title }}\">{{ feed.title }}</a></strong>
                <div>{{ feed.description|raw }}</div>
            </div>
        {% else %}
                No feeds available.
        {% endfor %}
    </div>
{% endblock %}
", "SonataBlockBundle:Block:block_core_rss.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sonata-project\\block-bundle/Resources/views/Block/block_core_rss.html.twig");
    }
}
