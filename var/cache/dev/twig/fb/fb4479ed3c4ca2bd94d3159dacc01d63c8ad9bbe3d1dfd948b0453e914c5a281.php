<?php

/* SyliusUiBundle:Layout:sidebar.html.twig */
class __TwigTemplate_5a2ffcc8d9ef32791648d1d8ae0aaa7b3ac73f0a09adbfc339e5eace8b0a6612 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'metatags' => array($this, 'block_metatags'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sidebar' => array($this, 'block_sidebar'),
            'topbar' => array($this, 'block_topbar'),
            'pre_content' => array($this, 'block_pre_content'),
            'content' => array($this, 'block_content'),
            'post_content' => array($this, 'block_post_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6ea30864a48237eaea56d001b448c269981bec192d21705bbc852a8fb6fa44af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ea30864a48237eaea56d001b448c269981bec192d21705bbc852a8fb6fa44af->enter($__internal_6ea30864a48237eaea56d001b448c269981bec192d21705bbc852a8fb6fa44af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Layout:sidebar.html.twig"));

        $__internal_9824c0f6f1a553fe23f097dabb692fd2d149a69671ef582d72bac9d23e1ac20f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9824c0f6f1a553fe23f097dabb692fd2d149a69671ef582d72bac9d23e1ac20f->enter($__internal_9824c0f6f1a553fe23f097dabb692fd2d149a69671ef582d72bac9d23e1ac20f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Layout:sidebar.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">

    ";
        // line 12
        $this->displayBlock('metatags', $context, $blocks);
        // line 14
        echo "
    ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "</head>

<body class=\"pushable\">
<div class=\"ui sidebar vertical inverted menu visible left\" id=\"sidebar\">
    ";
        // line 21
        $this->displayBlock('sidebar', $context, $blocks);
        // line 23
        echo "</div>
<div class=\"ui fixed inverted menu\">
    ";
        // line 25
        $this->displayBlock('topbar', $context, $blocks);
        // line 27
        echo "</div>
<div class=\"pusher\">
    <div class=\"full height\" id=\"wrapper\">
        <div id=\"content\">
            ";
        // line 31
        $this->loadTemplate("@SyliusUi/_flashes.html.twig", "SyliusUiBundle:Layout:sidebar.html.twig", 31)->display($context);
        // line 32
        echo "
            ";
        // line 33
        $this->displayBlock('pre_content', $context, $blocks);
        // line 35
        echo "
            ";
        // line 36
        $this->displayBlock('content', $context, $blocks);
        // line 38
        echo "
            ";
        // line 39
        $this->displayBlock('post_content', $context, $blocks);
        // line 41
        echo "        </div>
    </div>
</div>

";
        // line 45
        $this->loadTemplate("@SyliusUi/Modal/_confirmation.html.twig", "SyliusUiBundle:Layout:sidebar.html.twig", 45)->display($context);
        // line 46
        echo "
";
        // line 47
        $this->displayBlock('javascripts', $context, $blocks);
        // line 49
        echo "</body>
</html>
";
        
        $__internal_6ea30864a48237eaea56d001b448c269981bec192d21705bbc852a8fb6fa44af->leave($__internal_6ea30864a48237eaea56d001b448c269981bec192d21705bbc852a8fb6fa44af_prof);

        
        $__internal_9824c0f6f1a553fe23f097dabb692fd2d149a69671ef582d72bac9d23e1ac20f->leave($__internal_9824c0f6f1a553fe23f097dabb692fd2d149a69671ef582d72bac9d23e1ac20f_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_a3ee340bb0a17e6be09004a60b46058ccd2201bd48799f82af3833880b7438f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3ee340bb0a17e6be09004a60b46058ccd2201bd48799f82af3833880b7438f0->enter($__internal_a3ee340bb0a17e6be09004a60b46058ccd2201bd48799f82af3833880b7438f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cd31e31130308b9e46409de317a548df05c8c6784ec2b7202eac33d5892b6c17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd31e31130308b9e46409de317a548df05c8c6784ec2b7202eac33d5892b6c17->enter($__internal_cd31e31130308b9e46409de317a548df05c8c6784ec2b7202eac33d5892b6c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sylius";
        
        $__internal_cd31e31130308b9e46409de317a548df05c8c6784ec2b7202eac33d5892b6c17->leave($__internal_cd31e31130308b9e46409de317a548df05c8c6784ec2b7202eac33d5892b6c17_prof);

        
        $__internal_a3ee340bb0a17e6be09004a60b46058ccd2201bd48799f82af3833880b7438f0->leave($__internal_a3ee340bb0a17e6be09004a60b46058ccd2201bd48799f82af3833880b7438f0_prof);

    }

    // line 12
    public function block_metatags($context, array $blocks = array())
    {
        $__internal_b6ed4b623dc1232f2a59a097e3d0bd156830b603b62f767cce1d33de4bc040d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6ed4b623dc1232f2a59a097e3d0bd156830b603b62f767cce1d33de4bc040d7->enter($__internal_b6ed4b623dc1232f2a59a097e3d0bd156830b603b62f767cce1d33de4bc040d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metatags"));

        $__internal_0b202339ac51615d03bb701e87783024c7a5896d3d256689ca28a14556539252 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b202339ac51615d03bb701e87783024c7a5896d3d256689ca28a14556539252->enter($__internal_0b202339ac51615d03bb701e87783024c7a5896d3d256689ca28a14556539252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metatags"));

        // line 13
        echo "    ";
        
        $__internal_0b202339ac51615d03bb701e87783024c7a5896d3d256689ca28a14556539252->leave($__internal_0b202339ac51615d03bb701e87783024c7a5896d3d256689ca28a14556539252_prof);

        
        $__internal_b6ed4b623dc1232f2a59a097e3d0bd156830b603b62f767cce1d33de4bc040d7->leave($__internal_b6ed4b623dc1232f2a59a097e3d0bd156830b603b62f767cce1d33de4bc040d7_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_06f825d384a5e9aad32a739be902b359a9dd12166015f3bdfa5119632f673039 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06f825d384a5e9aad32a739be902b359a9dd12166015f3bdfa5119632f673039->enter($__internal_06f825d384a5e9aad32a739be902b359a9dd12166015f3bdfa5119632f673039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5a06e7f5dab80a5a54338545f0b63e9943ebd8aaf00338bd511679d7c890254b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a06e7f5dab80a5a54338545f0b63e9943ebd8aaf00338bd511679d7c890254b->enter($__internal_5a06e7f5dab80a5a54338545f0b63e9943ebd8aaf00338bd511679d7c890254b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "    ";
        
        $__internal_5a06e7f5dab80a5a54338545f0b63e9943ebd8aaf00338bd511679d7c890254b->leave($__internal_5a06e7f5dab80a5a54338545f0b63e9943ebd8aaf00338bd511679d7c890254b_prof);

        
        $__internal_06f825d384a5e9aad32a739be902b359a9dd12166015f3bdfa5119632f673039->leave($__internal_06f825d384a5e9aad32a739be902b359a9dd12166015f3bdfa5119632f673039_prof);

    }

    // line 21
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_1ff04415bcfe0fc5fddc18c3a5549973ee979406ee4b7fd8dd18bfafa610274e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ff04415bcfe0fc5fddc18c3a5549973ee979406ee4b7fd8dd18bfafa610274e->enter($__internal_1ff04415bcfe0fc5fddc18c3a5549973ee979406ee4b7fd8dd18bfafa610274e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_63561958ed36e5eb1eb0195a95375dd78d623509d6e6b1c56180334835f75fa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63561958ed36e5eb1eb0195a95375dd78d623509d6e6b1c56180334835f75fa2->enter($__internal_63561958ed36e5eb1eb0195a95375dd78d623509d6e6b1c56180334835f75fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 22
        echo "    ";
        
        $__internal_63561958ed36e5eb1eb0195a95375dd78d623509d6e6b1c56180334835f75fa2->leave($__internal_63561958ed36e5eb1eb0195a95375dd78d623509d6e6b1c56180334835f75fa2_prof);

        
        $__internal_1ff04415bcfe0fc5fddc18c3a5549973ee979406ee4b7fd8dd18bfafa610274e->leave($__internal_1ff04415bcfe0fc5fddc18c3a5549973ee979406ee4b7fd8dd18bfafa610274e_prof);

    }

    // line 25
    public function block_topbar($context, array $blocks = array())
    {
        $__internal_f92b1ce9bee2acb92685810044b066c0eeec72b13dbd9c635aadc31036502cbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f92b1ce9bee2acb92685810044b066c0eeec72b13dbd9c635aadc31036502cbb->enter($__internal_f92b1ce9bee2acb92685810044b066c0eeec72b13dbd9c635aadc31036502cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topbar"));

        $__internal_92c931e35c9168262808f5db853c9103539d14b23c0e6dd44f918453f5eaa5a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92c931e35c9168262808f5db853c9103539d14b23c0e6dd44f918453f5eaa5a3->enter($__internal_92c931e35c9168262808f5db853c9103539d14b23c0e6dd44f918453f5eaa5a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topbar"));

        // line 26
        echo "    ";
        
        $__internal_92c931e35c9168262808f5db853c9103539d14b23c0e6dd44f918453f5eaa5a3->leave($__internal_92c931e35c9168262808f5db853c9103539d14b23c0e6dd44f918453f5eaa5a3_prof);

        
        $__internal_f92b1ce9bee2acb92685810044b066c0eeec72b13dbd9c635aadc31036502cbb->leave($__internal_f92b1ce9bee2acb92685810044b066c0eeec72b13dbd9c635aadc31036502cbb_prof);

    }

    // line 33
    public function block_pre_content($context, array $blocks = array())
    {
        $__internal_aa0557aa39259166090a8f5fade7ea869f2ce6727ecf63fc2633cc3796f2e81e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa0557aa39259166090a8f5fade7ea869f2ce6727ecf63fc2633cc3796f2e81e->enter($__internal_aa0557aa39259166090a8f5fade7ea869f2ce6727ecf63fc2633cc3796f2e81e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pre_content"));

        $__internal_24f8acc86006295f062d6d525b4fa3ff16ba85eee111fe67cbb56faacfa88edb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24f8acc86006295f062d6d525b4fa3ff16ba85eee111fe67cbb56faacfa88edb->enter($__internal_24f8acc86006295f062d6d525b4fa3ff16ba85eee111fe67cbb56faacfa88edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pre_content"));

        // line 34
        echo "            ";
        
        $__internal_24f8acc86006295f062d6d525b4fa3ff16ba85eee111fe67cbb56faacfa88edb->leave($__internal_24f8acc86006295f062d6d525b4fa3ff16ba85eee111fe67cbb56faacfa88edb_prof);

        
        $__internal_aa0557aa39259166090a8f5fade7ea869f2ce6727ecf63fc2633cc3796f2e81e->leave($__internal_aa0557aa39259166090a8f5fade7ea869f2ce6727ecf63fc2633cc3796f2e81e_prof);

    }

    // line 36
    public function block_content($context, array $blocks = array())
    {
        $__internal_a59002f2b76453c1c70b3a00993aad46993bd4c69cea3c8147239c5a8128cab1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a59002f2b76453c1c70b3a00993aad46993bd4c69cea3c8147239c5a8128cab1->enter($__internal_a59002f2b76453c1c70b3a00993aad46993bd4c69cea3c8147239c5a8128cab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_9a192948396ab502df1b7ac780fd1a177f31215c3e942eab6d8ed0d4d4dd46bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a192948396ab502df1b7ac780fd1a177f31215c3e942eab6d8ed0d4d4dd46bd->enter($__internal_9a192948396ab502df1b7ac780fd1a177f31215c3e942eab6d8ed0d4d4dd46bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 37
        echo "            ";
        
        $__internal_9a192948396ab502df1b7ac780fd1a177f31215c3e942eab6d8ed0d4d4dd46bd->leave($__internal_9a192948396ab502df1b7ac780fd1a177f31215c3e942eab6d8ed0d4d4dd46bd_prof);

        
        $__internal_a59002f2b76453c1c70b3a00993aad46993bd4c69cea3c8147239c5a8128cab1->leave($__internal_a59002f2b76453c1c70b3a00993aad46993bd4c69cea3c8147239c5a8128cab1_prof);

    }

    // line 39
    public function block_post_content($context, array $blocks = array())
    {
        $__internal_4e5e9a4f2d071e8694c81ba331b9dc4aef879725fc5f08777f97e75172ec2f05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e5e9a4f2d071e8694c81ba331b9dc4aef879725fc5f08777f97e75172ec2f05->enter($__internal_4e5e9a4f2d071e8694c81ba331b9dc4aef879725fc5f08777f97e75172ec2f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "post_content"));

        $__internal_f07ec9767833e04aacabbd5526a944ec03da6a71a0013855dbc5f5d4e17c930f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f07ec9767833e04aacabbd5526a944ec03da6a71a0013855dbc5f5d4e17c930f->enter($__internal_f07ec9767833e04aacabbd5526a944ec03da6a71a0013855dbc5f5d4e17c930f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "post_content"));

        // line 40
        echo "            ";
        
        $__internal_f07ec9767833e04aacabbd5526a944ec03da6a71a0013855dbc5f5d4e17c930f->leave($__internal_f07ec9767833e04aacabbd5526a944ec03da6a71a0013855dbc5f5d4e17c930f_prof);

        
        $__internal_4e5e9a4f2d071e8694c81ba331b9dc4aef879725fc5f08777f97e75172ec2f05->leave($__internal_4e5e9a4f2d071e8694c81ba331b9dc4aef879725fc5f08777f97e75172ec2f05_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_27b291f67c96360c55a0c23312d21dca1c145ea4e8d33eb37ca57bb8b3faf008 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27b291f67c96360c55a0c23312d21dca1c145ea4e8d33eb37ca57bb8b3faf008->enter($__internal_27b291f67c96360c55a0c23312d21dca1c145ea4e8d33eb37ca57bb8b3faf008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9388b2033e4af6ae98be7d380e20674b7b40a55496425e85dba171c64be0bd62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9388b2033e4af6ae98be7d380e20674b7b40a55496425e85dba171c64be0bd62->enter($__internal_9388b2033e4af6ae98be7d380e20674b7b40a55496425e85dba171c64be0bd62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9388b2033e4af6ae98be7d380e20674b7b40a55496425e85dba171c64be0bd62->leave($__internal_9388b2033e4af6ae98be7d380e20674b7b40a55496425e85dba171c64be0bd62_prof);

        
        $__internal_27b291f67c96360c55a0c23312d21dca1c145ea4e8d33eb37ca57bb8b3faf008->leave($__internal_27b291f67c96360c55a0c23312d21dca1c145ea4e8d33eb37ca57bb8b3faf008_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Layout:sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 47,  260 => 40,  251 => 39,  241 => 37,  232 => 36,  222 => 34,  213 => 33,  203 => 26,  194 => 25,  184 => 22,  175 => 21,  165 => 16,  156 => 15,  146 => 13,  137 => 12,  119 => 8,  107 => 49,  105 => 47,  102 => 46,  100 => 45,  94 => 41,  92 => 39,  89 => 38,  87 => 36,  84 => 35,  82 => 33,  79 => 32,  77 => 31,  71 => 27,  69 => 25,  65 => 23,  63 => 21,  57 => 17,  55 => 15,  52 => 14,  50 => 12,  43 => 8,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>

<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <title>{% block title %}Sylius{% endblock %}</title>

    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">

    {% block metatags %}
    {% endblock %}

    {% block stylesheets %}
    {% endblock %}
</head>

<body class=\"pushable\">
<div class=\"ui sidebar vertical inverted menu visible left\" id=\"sidebar\">
    {% block sidebar %}
    {% endblock %}
</div>
<div class=\"ui fixed inverted menu\">
    {% block topbar %}
    {% endblock %}
</div>
<div class=\"pusher\">
    <div class=\"full height\" id=\"wrapper\">
        <div id=\"content\">
            {% include '@SyliusUi/_flashes.html.twig' %}

            {% block pre_content %}
            {% endblock %}

            {% block content %}
            {% endblock %}

            {% block post_content %}
            {% endblock %}
        </div>
    </div>
</div>

{% include '@SyliusUi/Modal/_confirmation.html.twig' %}

{% block javascripts %}
{% endblock %}
</body>
</html>
", "SyliusUiBundle:Layout:sidebar.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Layout/sidebar.html.twig");
    }
}
