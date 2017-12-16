<?php

/* @SyliusUi/Macro/breadcrumb.html.twig */
class __TwigTemplate_cb1edbe17563367a2b325630c90edfb5bff9be382d5913ef6ad9d6d49fa1c909 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3fae24400e86f8580706aa978e34b0d2ae2c35918e8df6c34df70af3a8f96420 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fae24400e86f8580706aa978e34b0d2ae2c35918e8df6c34df70af3a8f96420->enter($__internal_3fae24400e86f8580706aa978e34b0d2ae2c35918e8df6c34df70af3a8f96420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Macro/breadcrumb.html.twig"));

        $__internal_205d60bc7ea56532aa00a07ba7683450b2b268f68a48250a25c34169770a1f29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_205d60bc7ea56532aa00a07ba7683450b2b268f68a48250a25c34169770a1f29->enter($__internal_205d60bc7ea56532aa00a07ba7683450b2b268f68a48250a25c34169770a1f29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Macro/breadcrumb.html.twig"));

        
        $__internal_3fae24400e86f8580706aa978e34b0d2ae2c35918e8df6c34df70af3a8f96420->leave($__internal_3fae24400e86f8580706aa978e34b0d2ae2c35918e8df6c34df70af3a8f96420_prof);

        
        $__internal_205d60bc7ea56532aa00a07ba7683450b2b268f68a48250a25c34169770a1f29->leave($__internal_205d60bc7ea56532aa00a07ba7683450b2b268f68a48250a25c34169770a1f29_prof);

    }

    // line 1
    public function macro_crumble($__crumbs__ = array(), $__root_path__ = null, $__root_label__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "crumbs" => $__crumbs__,
            "root_path" => $__root_path__,
            "root_label" => $__root_label__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_0b28f0f589714e081c7b7e076c253a2c465c92e1140b838b6bb89cf652c3817d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_0b28f0f589714e081c7b7e076c253a2c465c92e1140b838b6bb89cf652c3817d->enter($__internal_0b28f0f589714e081c7b7e076c253a2c465c92e1140b838b6bb89cf652c3817d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "crumble"));

            $__internal_91874e371ce565a5746b05a91ebd15f326a2c0a530609e75136d4a87f232edeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_91874e371ce565a5746b05a91ebd15f326a2c0a530609e75136d4a87f232edeb->enter($__internal_91874e371ce565a5746b05a91ebd15f326a2c0a530609e75136d4a87f232edeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "crumble"));

            // line 2
            echo "    <div class=\"ui breadcrumb\">
        ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["crumbs"]) || array_key_exists("crumbs", $context) ? $context["crumbs"] : (function () { throw new Twig_Error_Runtime('Variable "crumbs" does not exist.', 3, $this->getSourceContext()); })()));
            $context['_iterated'] = false;
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["crumb"]) {
                // line 4
                echo "            ";
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array())) {
                    // line 5
                    echo "                <div class=\"active section\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["crumb"], "label", array()), "html", null, true);
                    echo "</div>
            ";
                } elseif (twig_get_attribute($this->env, $this->getSourceContext(),                 // line 6
$context["crumb"], "url", array(), "any", true, true)) {
                    // line 7
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["crumb"], "url", array()), "html", null, true);
                    echo "\" class=\"section\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["crumb"], "label", array()), "html", null, true);
                    echo "</a>
                <i class=\"right chevron icon divider\"></i>
            ";
                } else {
                    // line 10
                    echo "                <div class=\"section\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["crumb"], "label", array()), "html", null, true);
                    echo "</div>
                <i class=\"right chevron icon divider\"></i>
            ";
                }
                // line 13
                echo "        ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            if (!$context['_iterated']) {
                // line 14
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, ((array_key_exists("root_url", $context)) ? (_twig_default_filter((isset($context["root_url"]) || array_key_exists("root_url", $context) ? $context["root_url"] : (function () { throw new Twig_Error_Runtime('Variable "root_url" does not exist.', 14, $this->getSourceContext()); })()), "/")) : ("/")), "html", null, true);
                echo "\" class=\"section\">";
                echo twig_escape_filter($this->env, ((array_key_exists("root_label", $context)) ? (_twig_default_filter((isset($context["root_label"]) || array_key_exists("root_label", $context) ? $context["root_label"] : (function () { throw new Twig_Error_Runtime('Variable "root_label" does not exist.', 14, $this->getSourceContext()); })()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.root"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.root"))), "html", null, true);
                echo "</a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['crumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "    </div>
";
            
            $__internal_91874e371ce565a5746b05a91ebd15f326a2c0a530609e75136d4a87f232edeb->leave($__internal_91874e371ce565a5746b05a91ebd15f326a2c0a530609e75136d4a87f232edeb_prof);

            
            $__internal_0b28f0f589714e081c7b7e076c253a2c465c92e1140b838b6bb89cf652c3817d->leave($__internal_0b28f0f589714e081c7b7e076c253a2c465c92e1140b838b6bb89cf652c3817d_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@SyliusUi/Macro/breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 16,  113 => 14,  100 => 13,  93 => 10,  84 => 7,  82 => 6,  77 => 5,  74 => 4,  56 => 3,  53 => 2,  33 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro crumble(crumbs = {}, root_path, root_label) %}
    <div class=\"ui breadcrumb\">
        {% for crumb in crumbs %}
            {% if loop.last %}
                <div class=\"active section\">{{ crumb.label }}</div>
            {% elseif crumb.url is defined %}
                <a href=\"{{ crumb.url }}\" class=\"section\">{{ crumb.label }}</a>
                <i class=\"right chevron icon divider\"></i>
            {% else %}
                <div class=\"section\">{{ crumb.label }}</div>
                <i class=\"right chevron icon divider\"></i>
            {% endif %}
        {% else %}
            <a href=\"{{ root_url|default('/') }}\" class=\"section\">{{ root_label|default('sylius.ui.root'|trans) }}</a>
        {% endfor %}
    </div>
{% endmacro %}
", "@SyliusUi/Macro/breadcrumb.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle\\Resources\\views\\Macro\\breadcrumb.html.twig");
    }
}
