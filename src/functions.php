<?php

declare(strict_types=1);

namespace Ugarit\AgentDetector;

function detectAgent(): AgentResult
{
    return AgentDetector::detect();
}
