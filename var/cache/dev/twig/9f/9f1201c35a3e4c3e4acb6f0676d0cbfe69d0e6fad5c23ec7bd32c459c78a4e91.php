<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_338a22b2756b57ee60aaa8ac1c7107c9a3707a59bf7196e6f5ad3058123a8dae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5668f5bf91a7835ed5834ddd7fc274fc5a6502c5fcea0a5bc9afeb2c74b07bf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5668f5bf91a7835ed5834ddd7fc274fc5a6502c5fcea0a5bc9afeb2c74b07bf8->enter($__internal_5668f5bf91a7835ed5834ddd7fc274fc5a6502c5fcea0a5bc9afeb2c74b07bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_b6b4175d819fe73fb6380c1a7c13ba05bd36468e8eb546d0f49f7c40cf640d27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6b4175d819fe73fb6380c1a7c13ba05bd36468e8eb546d0f49f7c40cf640d27->enter($__internal_b6b4175d819fe73fb6380c1a7c13ba05bd36468e8eb546d0f49f7c40cf640d27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_5668f5bf91a7835ed5834ddd7fc274fc5a6502c5fcea0a5bc9afeb2c74b07bf8->leave($__internal_5668f5bf91a7835ed5834ddd7fc274fc5a6502c5fcea0a5bc9afeb2c74b07bf8_prof);

        
        $__internal_b6b4175d819fe73fb6380c1a7c13ba05bd36468e8eb546d0f49f7c40cf640d27->leave($__internal_b6b4175d819fe73fb6380c1a7c13ba05bd36468e8eb546d0f49f7c40cf640d27_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_02cb0a85a15b390c732aac62b1d3692adc9c1779a2123051fc3fe61aeee860bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02cb0a85a15b390c732aac62b1d3692adc9c1779a2123051fc3fe61aeee860bc->enter($__internal_02cb0a85a15b390c732aac62b1d3692adc9c1779a2123051fc3fe61aeee860bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_78a2c260d63ff0f1ed9ebe3552d2f8b46a2fdcbbddee981e4fdeb77773ab0858 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78a2c260d63ff0f1ed9ebe3552d2f8b46a2fdcbbddee981e4fdeb77773ab0858->enter($__internal_78a2c260d63ff0f1ed9ebe3552d2f8b46a2fdcbbddee981e4fdeb77773ab0858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_78a2c260d63ff0f1ed9ebe3552d2f8b46a2fdcbbddee981e4fdeb77773ab0858->leave($__internal_78a2c260d63ff0f1ed9ebe3552d2f8b46a2fdcbbddee981e4fdeb77773ab0858_prof);

        
        $__internal_02cb0a85a15b390c732aac62b1d3692adc9c1779a2123051fc3fe61aeee860bc->leave($__internal_02cb0a85a15b390c732aac62b1d3692adc9c1779a2123051fc3fe61aeee860bc_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_7bb1a063d07a718313a327d29e403b8d094712c20dbc2141b31bb1cde80f346e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bb1a063d07a718313a327d29e403b8d094712c20dbc2141b31bb1cde80f346e->enter($__internal_7bb1a063d07a718313a327d29e403b8d094712c20dbc2141b31bb1cde80f346e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9fdcfa24aac7e4c7331d52003f7936974f8f5700bed69da9e9cb827d72c26235 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fdcfa24aac7e4c7331d52003f7936974f8f5700bed69da9e9cb827d72c26235->enter($__internal_9fdcfa24aac7e4c7331d52003f7936974f8f5700bed69da9e9cb827d72c26235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_9fdcfa24aac7e4c7331d52003f7936974f8f5700bed69da9e9cb827d72c26235->leave($__internal_9fdcfa24aac7e4c7331d52003f7936974f8f5700bed69da9e9cb827d72c26235_prof);

        
        $__internal_7bb1a063d07a718313a327d29e403b8d094712c20dbc2141b31bb1cde80f346e->leave($__internal_7bb1a063d07a718313a327d29e403b8d094712c20dbc2141b31bb1cde80f346e_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff66454720bfcddce6998275db507573485163d19b94276bdf974821ef5d6e10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff66454720bfcddce6998275db507573485163d19b94276bdf974821ef5d6e10->enter($__internal_ff66454720bfcddce6998275db507573485163d19b94276bdf974821ef5d6e10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4f3ace26f15984ab4e251bcb7fcda0f32499995bf7acac9ab4f5110749ee72bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f3ace26f15984ab4e251bcb7fcda0f32499995bf7acac9ab4f5110749ee72bc->enter($__internal_4f3ace26f15984ab4e251bcb7fcda0f32499995bf7acac9ab4f5110749ee72bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4f3ace26f15984ab4e251bcb7fcda0f32499995bf7acac9ab4f5110749ee72bc->leave($__internal_4f3ace26f15984ab4e251bcb7fcda0f32499995bf7acac9ab4f5110749ee72bc_prof);

        
        $__internal_ff66454720bfcddce6998275db507573485163d19b94276bdf974821ef5d6e10->leave($__internal_ff66454720bfcddce6998275db507573485163d19b94276bdf974821ef5d6e10_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
